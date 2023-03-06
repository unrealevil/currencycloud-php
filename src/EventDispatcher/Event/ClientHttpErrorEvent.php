<?php

namespace CurrencyCloud\EventDispatcher\Event;

use Psr\Http\Message\ResponseInterface;
use Symfony\Contracts\EventDispatcher\Event;

final class ClientHttpErrorEvent extends Event
{
    public const NAME = 'client.response.error.event';

    private ResponseInterface $response;
    private ?array $requestParams;
    private string $method;
    private string $url;
    private ?array $originalRequest;
    private mixed $interceptedResponse;

    public function __construct(ResponseInterface $response, ?array $requestParams, string $method, string $url, ?array $originalRequest)
    {
        $this->response = $response;
        $this->requestParams = $requestParams;
        $this->method = $method;
        $this->url = $url;
        $this->originalRequest = $originalRequest;
    }

    public function getResponse(): ResponseInterface
    {
        return $this->response;
    }

    public function getRequestParams(): ?array
    {
        return $this->requestParams;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getOriginalRequest(): ?array
    {
        return $this->originalRequest;
    }

    public function setInterceptedResponse(mixed $response): self
    {
        $this->interceptedResponse = $response;

        return $this;
    }

    public function getInterceptedResponse(): mixed
    {
        return $this->interceptedResponse;
    }
}
