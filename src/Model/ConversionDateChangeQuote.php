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

    public function setConversionId(?string $conversionId): self
    {
        $this->conversionId = $conversionId;

        return $this;
    }

    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function setAmount(?string $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    public function getNewConversionDate(): ?DateTime
    {
        return $this->newConversionDate;
    }

    public function setNewConversionDate(?DateTime $newConversionDate): self
    {
        $this->newConversionDate = $newConversionDate;

        return $this;
    }

    public function getNewSettlementDate(): ?DateTime
    {
        return $this->newSettlementDate;
    }

    public function setNewSettlementDate(?DateTime $newSettlementDate): self
    {
        $this->newSettlementDate = $newSettlementDate;

        return $this;
    }

    public function getOldConversionDate(): ?DateTime
    {
        return $this->oldConversionDate;
    }

    public function setOldConversionDate(?DateTime $oldConversionDate): self
    {
        $this->oldConversionDate = $oldConversionDate;

        return $this;
    }

    public function getOldSettlementDate(): ?DateTime
    {
        return $this->oldSettlementDate;
    }

    public function setOldSettlementDate(?DateTime $oldSettlementDate): self
    {
        $this->oldSettlementDate = $oldSettlementDate;

        return $this;
    }

    public function getEventDateTime(): ?DateTime
    {
        return $this->eventDateTime;
    }

    public function setEventDateTime(?DateTime $eventDateTime): self
    {
        $this->eventDateTime = $eventDateTime;

        return $this;
    }
}
