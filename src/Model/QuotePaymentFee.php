<?php

namespace CurrencyCloud\Model;

class QuotePaymentFee
{
    private string $accountId;
    private string $paymentCurrency;
    private string $paymentDestinationCountry;
    private string $paymentType;
    private ?string $chargeType;
    private string $feeAmount;
    private string $feeCurrency;

    public function __construct(?string $accountId, ?string $paymentCurrency, ?string $paymentDestinationCountry, ?string $paymentType, ?string $chargeType, ?string $feeAmount, ?string $feeCurrency)
    {
        $this->accountId = (string) $accountId;
        $this->paymentCurrency = (string) $paymentCurrency;
        $this->paymentDestinationCountry = (string) $paymentDestinationCountry;
        $this->paymentType = (string) $paymentType;
        $this->chargeType = $chargeType;
        $this->feeAmount = (string) $feeAmount;
        $this->feeCurrency = (string) $feeCurrency;
    }

    public function getAccountId(): string
    {
        return $this->accountId;
    }

    public function getPaymentCurrency(): string
    {
        return $this->paymentCurrency;
    }

    public function getPaymentDestinationCurrency(): string
    {
        return $this->paymentDestinationCountry;
    }

    public function getPaymentType(): string
    {
        return $this->paymentType;
    }

    public function getChargeType(): ?string
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
