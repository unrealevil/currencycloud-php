<?php

namespace CurrencyCloud\Model;

use DateTime;

class DetailedRate
{
    private ?DateTime $settlementCutOffTime;
    private string $currencyPair;
    private string $clientBuyCurrency;
    private string $clientSellCurrency;
    private string $clientBuyAmount;
    private string $clientSellAmount;
    private string $fixedSide;
    private string $midMarketRate;
    private string $coreRate;
    private string $partnerRate;
    private string $clientRate;
    private string $depositRequired;
    private string $depositAmount;
    private string $depositCurrency;

    public function __construct(
        ?DateTime $settlementCutOffTime,
        ?string $currencyPair,
        ?string $clientBuyCurrency,
        ?string $clientSellCurrency,
        ?string $clientBuyAmount,
        ?string $clientSellAmount,
        ?string $fixedSide,
        ?string $midMarketRate,
        ?string $coreRate,
        ?string $partnerRate,
        ?string $clientRate,
        ?string $depositRequired,
        ?string $depositAmount,
        ?string $depositCurrency
    ) {
        $this->settlementCutOffTime = $settlementCutOffTime;
        $this->currencyPair = (string) $currencyPair;
        $this->clientBuyCurrency = (string) $clientBuyCurrency;
        $this->clientSellCurrency = (string) $clientSellCurrency;
        $this->clientBuyAmount = (string) $clientBuyAmount;
        $this->clientSellAmount = (string) $clientSellAmount;
        $this->fixedSide = (string) $fixedSide;
        $this->midMarketRate = (string) $midMarketRate;
        $this->coreRate = (string) $coreRate;
        $this->partnerRate = (string) $partnerRate;
        $this->clientRate = (string) $clientRate;
        $this->depositRequired = (string) $depositRequired;
        $this->depositAmount = (string) $depositAmount;
        $this->depositCurrency = (string) $depositCurrency;
    }

    public function getSettlementCutOffTime(): ?DateTime
    {
        return $this->settlementCutOffTime;
    }

    public function getCurrencyPair(): string
    {
        return $this->currencyPair;
    }

    public function getClientBuyCurrency(): string
    {
        return $this->clientBuyCurrency;
    }

    public function getClientSellCurrency(): string
    {
        return $this->clientSellCurrency;
    }

    public function getClientBuyAmount(): string
    {
        return $this->clientBuyAmount;
    }

    public function getClientSellAmount(): string
    {
        return $this->clientSellAmount;
    }

    public function getFixedSide(): string
    {
        return $this->fixedSide;
    }

    public function getMidMarketRate(): string
    {
        return $this->midMarketRate;
    }

    public function getCoreRate(): string
    {
        return $this->coreRate;
    }

    public function getPartnerRate(): string
    {
        return $this->partnerRate;
    }

    public function getClientRate(): string
    {
        return $this->clientRate;
    }

    public function getDepositRequired(): string
    {
        return $this->depositRequired;
    }

    public function getDepositAmount(): string
    {
        return $this->depositAmount;
    }

    public function getDepositCurrency(): string
    {
        return $this->depositCurrency;
    }
}
