<?php

namespace CurrencyCloud\Model\PaymentTrackingInfo;

class ForeignExchangeDetails
{
    private string $sourceCurrency;
    private string $targetCurrency;
    private string $rate;

    public function __construct(string $sourceCurrency, string $targetCurrency, string $rate)
    {
        $this->sourceCurrency = $sourceCurrency;
        $this->targetCurrency = $targetCurrency;
        $this->rate = $rate;
    }

    public function getSourceCurrency(): string
    {
        return $this->sourceCurrency;
    }

    public function getTargetCurrency(): string
    {
        return $this->targetCurrency;
    }

    public function getRate(): string
    {
        return $this->rate;
    }
}
