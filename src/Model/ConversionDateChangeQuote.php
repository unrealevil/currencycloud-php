<?php

namespace CurrencyCloud\Model;

use DateTime;

class ConversionDateChangeQuote
{
    private ?string $conversionId;
    private ?string $amount;
    private ?string $currency;
    private ?DateTime $newConversionDate;
    private ?DateTime $newSettlementDate;
    private ?DateTime $oldConversionDate;
    private ?DateTime $oldSettlementDate;
    private ?DateTime $eventDateTime;

    public function __construct(?string $conversionId, ?string $amount, ?string $currency, ?DateTime $newConversionDate, ?DateTime $newSettlementDate, ?DateTime $oldConversionDate, ?DateTime $oldSettlementDate, ?DateTime $eventDateTime)
    {
        $this->conversionId = $conversionId;
        $this->amount = $amount;
        $this->currency = $currency;
        $this->newConversionDate = $newConversionDate;
        $this->newSettlementDate = $newSettlementDate;
        $this->oldConversionDate = $oldConversionDate;
        $this->oldSettlementDate = $oldSettlementDate;
        $this->eventDateTime = $eventDateTime;
    }

    public function getConversionId(): ?string
    {
        return $this->conversionId;
    }

    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function getNewConversionDate(): ?DateTime
    {
        return $this->newConversionDate;
    }

    public function getNewSettlementDate(): ?DateTime
    {
        return $this->newSettlementDate;
    }

    public function getOldConversionDate(): ?DateTime
    {
        return $this->oldConversionDate;
    }

    public function getOldSettlementDate(): ?DateTime
    {
        return $this->oldSettlementDate;
    }

    public function getEventDateTime(): ?DateTime
    {
        return $this->eventDateTime;
    }
}
