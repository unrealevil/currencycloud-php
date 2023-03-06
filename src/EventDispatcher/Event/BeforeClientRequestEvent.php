<?php

namespace CurrencyCloud\EventDispatcher\Event;

use Symfony\Contracts\EventDispatcher\Event;

final class BeforeClientRequestEvent extends Event
{
    public const NAME = 'client.request.before.event';

    private ?string $method;
    private ?string $uri;
    private ?array $queryParams;
    private ?array $requestParams;
    private ?array $options;
    private ?bool $secured;

    public function __construct(
        ?string $method,
        ?string $uri,
        ?array $queryParams,
        ?array $requestParams,
        ?array $options,
        ?bool $secured
    ) {
        $this->method = $method;
        $this->uri = $uri;
        $this->queryParams = $queryParams;
        $this->requestParams = $requestParams;
        $this->options = $options;
        $this->secured = $secured;
    }

    public function getMethod(): ?string
    {
        return $this->method;
    }

    public function getUri(): ?string
    {
        return $this->uri;
    }

    public function getQueryParams(): ?array
    {
        return $this->queryParams;
    }

    public function getRequestParams(): ?array
    {
        return $this->requestParams;
    }

    public function getOptions(): ?array
    {
        return $this->options;
    }

    public function isSecured(): ?bool
    {
        return $this->secured;
    }
}
