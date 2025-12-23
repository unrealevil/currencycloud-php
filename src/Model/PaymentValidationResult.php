<?php

namespace CurrencyCloud\Model;

class PaymentValidationResult
{
    private const HEADER_SCA_ID = 'x-sca-id';
    private const HEADER_SCA_REQUIRED = 'x-sca-required';
    private const HEADER_SCA_TYPE = 'x-sca-type';

    private string $validationResult;
    private array $responseHeaders;

    public function __construct(string $validationResult, array $responseHeaders)
    {
        $this->validationResult = $validationResult;
        $this->responseHeaders = $responseHeaders;
    }

    public function getValidationResult(): string
    {
        return $this->validationResult;
    }

    public function setValidationResult(string $validationResult): self
    {
        $this->validationResult = $validationResult;

        return $this;
    }

    private function getHeader(string $key): ?string
    {
        return isset($this->responseHeaders[$key]) ? $this->responseHeaders[$key][0] : null;
    }

    public function getScaId(): ?string
    {
        return $this->getHeader(self::HEADER_SCA_ID);
    }

    public function getScaRequired(): ?string
    {
        return $this->getHeader(self::HEADER_SCA_REQUIRED);
    }

    public function getScaType(): ?string
    {
        return $this->getHeader(self::HEADER_SCA_TYPE);
    }
}
