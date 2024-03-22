<?php

namespace CurrencyCloud\Model;

class PaymentFeeRule
{
    private string $paymentType;
    private string $chargeType;
    private string $feeAmount;
    private string $feeCurrency;

    public function __construct(?string $paymentType, ?string $chargeType, ?string $feeAmount, ?string $feeCurrency)
    {
        $this->paymentType = (string) $paymentType;
        $this->chargeType = (string) $chargeType;
        $this->feeAmount = (string) $feeAmount;
        $this->feeCurrency = (string) $feeCurrency;
    }

    public function getPaymentType(): string
    {
        return $this->paymentType;
    }

    public function getChargeType(): string
    {
        return $this->chargeType;
    }

    public function getFeeAmount(): string
    {
        return $this->feeAmount;
    }

    public function getFeeCurrency(): string
    {
        return $this->feeCurrency;
    }
}
