<?php

namespace CurrencyCloud\Model;

class Rate
{
    private ?string $bidRate;
    private ?string $offerRate;

    public function __construct(?string $bidRate, ?string $offerRate)
    {
        $this->bidRate = (string) $bidRate;
        $this->offerRate = (string) $offerRate;
    }

    public function getBidRate(): string
    {
        return $this->bidRate;
    }

    public function getOfferRate(): string
    {
        return $this->offerRate;
    }
}
