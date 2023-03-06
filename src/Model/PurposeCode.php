<?php

namespace CurrencyCloud\Model;

class PurposeCode
{
    private ?string $currency;
    private ?int $entityType;
    private ?string $purposeCode;
    private ?string $purposeDescription;

    public function __construct(?string $currency, ?int $entityType, ?string $purposeCode, ?string $purposeDescription)
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

    public function getEntityType(): ?int
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
