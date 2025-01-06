<?php

namespace CurrencyCloud\Exception;

use Exception;
use RuntimeException;
use Symfony\Component\Yaml\Dumper;

abstract class CurrencyCloudException extends RuntimeException
{
    private ?array $parameters;
    private string $httpMethod;
    private string $url;
    private ?string $compiled = null;
    private string $apiCode;

    public function __construct(
        ?array $parameters,
        ?string $httpMethod,
        ?string $url,
        ?string $message = '',
        ?string $apiCode = '',
        ?Exception $previous = null
    ) {
        parent::__construct($message, 0, $previous);
        $this->parameters = $parameters;
        $this->httpMethod = \strtolower((string) $httpMethod);
        $this->url = (string) $url;
        $this->apiCode = (string) $apiCode;
    }

    public function __toString(): string
    {
        return $this->getCompiled();
    }

    public function getParameters(): ?array
    {
        return $this->parameters;
    }

    public function getHttpMethod(): string
    {
        return $this->httpMethod;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getCompiled(): string
    {
        if (null === $this->compiled) {
            $dumper = new Dumper();
            $this->compiled = \trim(\sprintf(
                "%s\n---\n%s",
                \basename(\str_replace('\\', '/', \get_class($this))),
                $dumper->dump($this->getCompileProperties(), PHP_INT_MAX)
            ));
        }
        return $this->compiled;
    }

    public function getApiCode(): string
    {
        return $this->apiCode;
    }

    protected function getCompileProperties(): array
    {
        return [
            'platform' => \sprintf('PHP %s', PHP_VERSION),
            'request' => [
                'parameters' => $this->parameters,
                'verb' => $this->httpMethod,
                'url' => $this->url
            ]
        ];
    }
}
