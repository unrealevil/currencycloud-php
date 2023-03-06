<?php

namespace CurrencyCloud\Criteria;

class ConversionProfitLossCriteria
{
    private ?string $accountId = null;
    private ?string $contactId = null;
    private ?string $conversionId = null;
    private ?string $eventType = null;
    private ?string $eventDateTimeFrom = null;
    private ?string $eventDateTimeTo = null;
    private ?string $amountFrom = null;
    private ?string $amountTo = null;
    private ?string $currency = null;
    private ?string $scope = null;

    public function getAccountId(): ?string
    {
        return $this->accountId;
    }

    public function setAccountId(?string $accountId): static
    {
        $this->accountId = $accountId;

        return $this;
    }

    public function getContactId(): ?string
    {
        return $this->contactId;
    }

    public function setContactId(?string $contactId): static
    {
        $this->contactId = $contactId;

        return $this;
    }

    public function getConversionId(): ?string
    {
        return $this->conversionId;
    }

    public function setConversionId(?string $conversionId): static
    {
        $this->conversionId = $conversionId;

        return $this;
    }

    public function getEventType(): ?string
    {
        return $this->eventType;
    }

    public function setEventType(?string $eventType): static
    {
        $this->eventType = $eventType;

        return $this;
    }

    public function getEventDateTimeFrom(): ?string
    {
        return $this->eventDateTimeFrom;
    }

    public function setEventDateTimeFrom(?string $eventDateTimeFrom): static
    {
        $this->eventDateTimeFrom = $eventDateTimeFrom;

        return $this;
    }

    public function getEventDateTimeTo(): ?string
    {
        return $this->eventDateTimeTo;
    }

    public function setEventDateTimeTo(?string $eventDateTimeTo): static
    {
        $this->eventDateTimeTo = $eventDateTimeTo;

        return $this;
    }

    public function getAmountFrom(): ?string
    {
        return $this->amountFrom;
    }

    public function setAmountFrom(?string $amountFrom): static
    {
        $this->amountFrom = $amountFrom;

        return $this;
    }

    public function getAmountTo(): ?string
    {
        return $this->amountTo;
    }

    public function setAmountTo(?string $amountTo): static
    {
        $this->amountTo = $amountTo;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(?string $currency): static
    {
        $this->currency = $currency;

        return $this;
    }

    public function getScope(): ?string
    {
        return $this->scope;
    }

    public function setScope(?string $scope): static
    {
        $this->scope = $scope;

        return $this;
    }

}
