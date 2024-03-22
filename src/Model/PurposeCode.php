<?php

namespace CurrencyCloud\Model;

class PurposeCode
{
    private ?string $currency;
    private ?string $entityType;
    private ?string $purposeCode;
    private ?string $purposeDescription;

    public function __construct(?string $currency, ?string $entityType, ?string $purposeCode, ?string $purposeDescription)
    {
        $this->currency = $currency;
        $this->entityType = $entityType;
        $this->purposeCode = $purposeCode;
        $this->purposeDescription = $purposeDescription;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function getEntityType(): ?string
    {
        return $this->entityType;
    }

    public function getPurposeCode(): ?string
    {
        return $this->purposeCode;
    }

    public function getPurposeDescription(): ?string
    {
        return $this->purposeDescription;
    }
}
