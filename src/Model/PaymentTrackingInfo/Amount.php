<?php

namespace CurrencyCloud\Model\PaymentTrackingInfo;

class Amount
{
    private string $currency;
    private string $amount;

    public function __construct(string $currency, string $amount)
    {
        $this->currency = $currency;
        $this->amount = $amount;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getAmount(): string
    {
        return $this->amount;
    }
}
