<?php

namespace CurrencyCloud;

use CurrencyCloud\EventDispatcher\Event\BeforeClientRequestEvent;
use CurrencyCloud\EventDispatcher\Event\ClientHttpErrorEvent;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use stdClass;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class Client
{
    protected ClientInterface $client;
    protected Session $session;
    private EventDispatcherInterface $eventDispatcher;

    public function __construct(Session $session, ClientInterface $client, EventDispatcherInterface $eventDispatcher)
    {
        $this->client = $client;
        $this->session = $session;
        $this->eventDispatcher = $eventDispatcher;
    }

    /**
     * @throws \RuntimeException|\JsonException|GuzzleException
     */
    public function request(string $method, string $uri, array $queryParams, array $requestParams, array $options, bool $secured): array|stdClass
    {
        $this->eventDispatcher->dispatch(new BeforeClientRequestEvent(
            $method,
            $uri,
            $queryParams,
            $requestParams,
            $options,
            $secured
        ), BeforeClientRequestEvent::NAME);

        $originalRequest = [
            'method' => $method,
            'uri' => $uri,
            'queryParams' => $queryParams,
            'requestParams' => $requestParams,
            'option' => $options,
            'secured' => $secured
        ];

        //Check for on behalf of in order to inject it if needed
        $isOnBehalfOfUsedInParams = false;
        foreach ([&$queryParams, &$requestParams] as &$paramsArray) {
            if (\array_key_exists('on_behalf_of', $paramsArray)) { //isset is not used because id skips null-s
                if (null !== $paramsArray['on_behalf_of']) {
                    $this->session->setOnBehalfOf($paramsArray['on_behalf_of']);
                    $isOnBehalfOfUsedInParams = true;
                } else {
                    $onBehalfOf = $this->session->getOnBehalfOf();
                    if (null !== $onBehalfOf) {
                        $paramsArray['on_behalf_of'] = $onBehalfOf;
                    }
                }
            }
        }
        try {
            //Wrap whole section if someone, for example, throws exceptions for PHP warnings etc.
            if ($secured) {
                //Perhaps check here if auth token set?
                $options['headers']['X-Auth-Token'] = $this->session->getAuthToken();
            }

            $options['headers']['User-Agent'] = "CurrencyCloudSDK/2.0 PHP/".CurrencyCloud::$SDK_VERSION;

            $queryParams = \array_filter($queryParams);
            $requestParams = \array_filter($requestParams);

            if (\count($requestParams) > 0) {
                if (!isset($options['form_params'])) {
                    $options['form_params'] = [];
                }
                $options['form_params'] = \array_merge($options['form_params'], $requestParams);
            }

            $this->formatFormData($options);

            //Force no-exceptions in order to provide descriptive error messages
            $options['http_errors'] = false;
            $url = $this->applyApiBaseUrl($uri, $queryParams);

            $response = $this->client->request($method, $url, $options);

            switch ($response->getStatusCode()) {
                case 200:
                    return \json_decode($response->getBody()->getContents(), flags: \JSON_THROW_ON_ERROR);
                default:
                    //Everything that's not 200 consider error and dispatch event
                    $event = new ClientHttpErrorEvent(
                        $response,
                        $requestParams,
                        $method,
                        $url,
                        $originalRequest
                    );
                    $this->eventDispatcher->dispatch($event, ClientHttpErrorEvent::NAME);
                    $interceptedResponse = $event->getInterceptedResponse();
                    if (null !== $interceptedResponse) {
                        return $interceptedResponse;
                    }
            }
        } finally {
            //If on-behalf-of was injected through params, clear it now
            if ($isOnBehalfOfUsedInParams) {
                $this->session->clearOnBehalfOf();
            }
        }
        throw new \RuntimeException($response->getBody()->getContents());
    }

    protected function formatFormData(array &$options): ?array
    {
        $newForm = [];
        if (empty($options['form_params'])) {
            return $newForm;
        }
        foreach ($options['form_params'] as $name => $param) {
            if (\is_array($param)) {
                foreach ($param as $value) {
                    $newForm[] = ['name' => $name."[]", 'contents' => $value];
                }
            } else {
                $newForm[] = ['name' => $name, 'contents' => $param];
            }
        }
        unset($options['form_params']);
        $options['multipart'] = $newForm;

        return null;
    }

    protected function applyApiBaseUrl(string $path, array $queryParams): string
    {
        if (\count($queryParams) > 0) {
            return \sprintf('%s%s?%s', $this->session->getApiUrl(), $path, \http_build_query($queryParams));
        }
        return \sprintf('%s%s', $this->session->getApiUrl(), $path);
    }
}
