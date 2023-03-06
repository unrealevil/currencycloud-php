<?php

namespace CurrencyCloud\Model;

use DateTime;

class ConversionCancellationQuote
{
    private ?string $amount;
    private ?string $currency;
    private ?DateTime $eventDateTime;

    public function __construct(?string $amount, ?string $currency, ?DateTime $eventDateTime)
    {
        $this->amount = $amount;
        $this->currency = $currency;
        $this->eventDateTime = $eventDateTime;
    }

    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function getEventDateTime(): ?DateTime
    {
        return $this->eventDateTime;
    }
}
