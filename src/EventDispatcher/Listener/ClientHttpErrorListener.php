<?php

namespace CurrencyCloud\EventDispatcher\Listener;

use CurrencyCloud\EventDispatcher\Event\ClientHttpErrorEvent;
use CurrencyCloud\Exception\ApiException;
use CurrencyCloud\Exception\AuthenticationException;
use CurrencyCloud\Exception\BadRequestException;
use CurrencyCloud\Exception\ForbiddenException;
use CurrencyCloud\Exception\InternalApplicationException;
use CurrencyCloud\Exception\NotFoundException;
use CurrencyCloud\Exception\ToManyRequestsException;
use function array_is_list;
use function current;
use function implode;
use function is_array;
use function json_decode;

class ClientHttpErrorListener
{
    public function onClientHttpErrorEvent(ClientHttpErrorEvent $event): void
    {
        $response = $event->getResponse();
        $requestParams = $event->getRequestParams();
        $method = $event->getMethod();
        $url = $event->getUrl();
        $class = match ($response->getStatusCode()) {
            400 => BadRequestException::class,
            401 => AuthenticationException::class,
            403 => ForbiddenException::class,
            404 => NotFoundException::class,
            429 => ToManyRequestsException::class,
            500 => InternalApplicationException::class,
            default => ApiException::class,
        };
        $statusCode = $response->getStatusCode();
        $date = current($response->getHeader('Date'));
        $requestId = current($response->getHeader('X-Request-Id'));
        $body =
            $response->getBody()
                ->getContents();
        $decoded = json_decode($body, true, flags: \JSON_THROW_ON_ERROR);
        if (is_array($decoded)) {
            $errors = [];
            $messages = [];
            foreach ($decoded['error_messages'] as $field => $messageContexts) {
                if(array_is_list($messageContexts)) {
                    foreach ($messageContexts as $messageContext) {
                        $errors[] = [
                            'field' => $field,
                            'code' => $messageContext['code'],
                            'message' => $messageContext['message'],
                            'params' => $messageContext['params']
                        ];
                        $messages['message'] = $messageContext['message'];
                    }
                } else {
                    $errors[] = [
                        'field' => $field,
                        'code' => $messageContexts['code'],
                        'message' => $messageContexts['message'],
                        'params' => $messageContexts['params']
                    ];
                    $messages['message'] = $messageContexts['message'];
                }
            }
            $message = implode('; ', $messages);
            $code = (int) $decoded['error_code'];
        } else {
            $message = 'Invalid JSON describing error returned';
            $errors = null;
            $code = 0;
        }
        throw new $class($statusCode, $date, $requestId, $errors, $requestParams, $method, $url, $message, $code);
    }
}
