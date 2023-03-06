<?php

namespace CurrencyCloud\Model;

use DateTime;

class ConversionProfitLoss
{
    private ?string $accountId;
    private ?string $contactId;
    private ?string $eventAccountId;
    private ?string $eventContactId;
    private ?string $conversionId;
    private ?string $eventType;
    private ?string $amount;
    private ?string $currency;
    private ?string $notes;
    private ?DateTime $eventDateTime;

    public function __construct(?string $accountId, ?string $contactId, ?string $eventAccountId, ?string $eventContactId, string $conversionId, string $eventType, string $amount, string $currency, string $notes, DateTime $eventDateTime)
    {
        $this->accountId = $accountId;
        $this->contactId = $contactId;
        $this->eventAccountId = $eventAccountId;
        $this->eventContactId = $eventContactId;
        $this->conversionId = $conversionId;
        $this->eventType = $eventType;
        $this->amount = $amount;
        $this->currency = $currency;
        $this->notes = $notes;
        $this->eventDateTime = $eventDateTime;
    }

    public function getAccountId(): ?string
    {
        return $this->accountId;
    }

    public function getContactId(): ?string
    {
        return $this->contactId;
    }

    public function getEventAccountId(): ?string
    {
        return $this->eventAccountId;
    }

    public function getEventContactId(): ?string
    {
        return $this->eventContactId;
    }

    public function getConversionId(): ?string
    {
        return $this->conversionId;
    }

    public function getEventType(): ?string
    {
        return $this->eventType;
    }

    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function getEventDateTime(): ?DateTime
    {
        return $this->eventDateTime;
    }
}
