<?php

namespace CurrencyCloud\EventDispatcher\Listener;

use CurrencyCloud\Client;
use CurrencyCloud\EntryPoint\AuthenticateEntryPoint;
use CurrencyCloud\EventDispatcher\Event\ClientHttpErrorEvent;
use Exception;

class SessionTimeoutListener
{
    private bool $intercepted = false;
    private AuthenticateEntryPoint $authenticateEntryPoint;
    private Client $client;

    public function __construct(Client $client, AuthenticateEntryPoint $authenticateEntryPoint)
    {
        $this->authenticateEntryPoint = $authenticateEntryPoint;
        $this->client = $client;
    }

    public function onClientHttpErrorEvent(ClientHttpErrorEvent $event): void
    {
        //If we already are in intercepted response, don't do it again
        if ($this->intercepted) {
            return ;
        }
        $response = $event->getResponse();
        if (401 !== $response->getStatusCode()) {
            return ;
        }
        try {
            $this->intercepted = true;
            $this->authenticateEntryPoint->login();
            $originalRequest = $event->getOriginalRequest();
            $interceptedResponse = $this->client->request(
                $originalRequest['method'],
                $originalRequest['uri'],
                $originalRequest['queryParams'],
                $originalRequest['requestParams'],
                $originalRequest['option'],
                $originalRequest['secured']
            );
            $event->setInterceptedResponse($interceptedResponse);
            $event->stopPropagation();
        } catch (Exception) {
            //Ignore any exception that got here
        } finally {
            $this->intercepted = false;
        }
    }
}
