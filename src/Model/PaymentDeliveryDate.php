<?php

namespace CurrencyCloud\Model;

use DateTime;

class PaymentDeliveryDate
{
    private ?DateTime $paymentDate;
    private ?DateTime $paymentDeliveryDate;
    private ?DateTime $paymentCutoffTime;
    private string $paymentType;
    private string $currency;
    private string $bankCountry;

    public function __construct(?DateTime $paymentDate, ?DateTime $paymentDeliveryDate, ?DateTime $paymentCutoffTime, ?string $paymentType, ?string $currency, ?string $bankCountry)
    {
        $this->paymentDate =  $paymentDate;
        $this->paymentDeliveryDate = $paymentDeliveryDate;
        $this->paymentCutoffTime =  $paymentCutoffTime;
        $this->paymentType = (string) $paymentType;
        $this->currency = (string) $currency;
        $this->bankCountry = (string) $bankCountry;
    }

    public function getPaymentDate(): ?DateTime
    {
        return $this->paymentDate;
    }

    public function getPaymentDeliveryDate(): ?DateTime
    {
        return $this->paymentDeliveryDate;
    }

    public function getPaymentCutoffTime(): ?DateTime
    {
        return $this->paymentCutoffTime;
    }

    public function getPaymentType(): string
    {
        return $this->paymentType;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getBankCountry(): string
    {
        return $this->bankCountry;
    }
}
