<?php

namespace CurrencyCloud\Model;

use DateTime;
use DateTimeInterface;

class Conversion
{
    private ?string $id = null;

    private ?string $accountId = null;

    private ?string $creatorContactId = null;

    private ?string $shortReference = null;

    private ?DateTimeInterface $settlementDate = null;

    private ?DateTimeInterface $conversionDate = null;

    private ?string $status = null;

    private ?string $partnerStatus = null;

    private ?string $currencyPair = null;

    private ?string $buyCurrency = null;

    private ?string $sellCurrency = null;

    private ?string $fixedSide = null;

    private ?string $partnerBuyAmount = null;

    private ?string $partnerSellAmount = null;

    private ?string $clientBuyAmount = null;

    private ?string $clientSellAmount = null;

    private ?string $midMarketRate = null;

    private ?string $coreRate = null;

    private ?string $partnerRate = null;

    private ?string $clientRate = null;

    private ?string $depositRequired = null;

    private ?string $depositAmount = null;

    private ?string $depositCurrency = null;

    private ?string $depositStatus = null;

    private ?DateTimeInterface $depositRequiredAt = null;

    private ?array $paymentIds = null;

    private ?DateTimeInterface $createdAt = null;

    private ?DateTimeInterface $updatedAt = null;

    private ?string $uniqueRequestId = null;

    public static function create(?string $buyCurrency, string $sellCurrency, string $fixedSide): Conversion
    {
        return (new self())
            ->setBuyCurrency($buyCurrency)
            ->setSellCurrency($sellCurrency)
            ->setFixedSide($fixedSide);
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getAccountId(): ?string
    {
        return $this->accountId;
    }

    public function setAccountId(?string $accountId): static
    {
        $this->accountId = $accountId;

        return $this;
    }

    public function getCreatorContactId(): ?string
    {
        return $this->creatorContactId;
    }

    public function setCreatorContactId(?string $creatorContactId): static
    {
        $this->creatorContactId = $creatorContactId;

        return $this;
    }

    public function getShortReference(): ?string
    {
        return $this->shortReference;
    }

    public function setShortReference(?string $shortReference): static
    {
        $this->shortReference = $shortReference;

        return $this;
    }

    public function getSettlementDate(): ?DateTimeInterface
    {
        return $this->settlementDate;
    }

    public function setSettlementDate(?string $settlementDate): static
    {
        if ($settlementDate) {
            $this->settlementDate = new DateTime($settlementDate);
        }

        return $this;
    }

    public function getConversionDate(): ?DateTimeInterface
    {
        return $this->conversionDate;
    }

    public function setConversionDate(?string $conversionDate): static
    {
        if ($conversionDate) {
            $this->conversionDate = new DateTime($conversionDate);
        }

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getPartnerStatus(): ?string
    {
        return $this->partnerStatus;
    }

    public function setPartnerStatus(?string $partnerStatus): static
    {
        $this->partnerStatus = $partnerStatus;

        return $this;
    }

    public function getCurrencyPair(): ?string
    {
        return $this->currencyPair;
    }

    public function setCurrencyPair(?string $currencyPair): static
    {
        $this->currencyPair = $currencyPair;

        return $this;
    }

    public function getBuyCurrency(): ?string
    {
        return $this->buyCurrency;
    }

    public function setBuyCurrency(?string $buyCurrency): static
    {
        $this->buyCurrency = $buyCurrency;

        return $this;
    }

    public function getSellCurrency(): ?string
    {
        return $this->sellCurrency;
    }

    public function setSellCurrency(?string $sellCurrency): static
    {
        $this->sellCurrency = $sellCurrency;

        return $this;
    }

    public function getFixedSide(): ?string
    {
        return $this->fixedSide;
    }

    public function setFixedSide(?string $fixedSide): static
    {
        $this->fixedSide = $fixedSide;

        return $this;
    }

    public function getPartnerBuyAmount(): ?string
    {
        return $this->partnerBuyAmount;
    }

    public function setPartnerBuyAmount(?string $partnerBuyAmount): static
    {
        $this->partnerBuyAmount = $partnerBuyAmount;

        return $this;
    }

    public function getPartnerSellAmount(): ?string
    {
        return $this->partnerSellAmount;
    }

    public function setPartnerSellAmount(?string $partnerSellAmount): static
    {
        $this->partnerSellAmount = $partnerSellAmount;

        return $this;
    }

    public function getClientBuyAmount(): ?string
    {
        return $this->clientBuyAmount;
    }

    public function setClientBuyAmount(?string $clientBuyAmount): static
    {
        $this->clientBuyAmount = $clientBuyAmount;

        return $this;
    }

    public function getClientSellAmount(): ?string
    {
        return $this->clientSellAmount;
    }

    public function setClientSellAmount(?string $clientSellAmount): static
    {
        $this->clientSellAmount = $clientSellAmount;

        return $this;
    }

    public function getMidMarketRate(): ?string
    {
        return $this->midMarketRate;
    }

    public function setMidMarketRate(?string $midMarketRate): static
    {
        $this->midMarketRate = $midMarketRate;

        return $this;
    }

    public function getPartnerRate(): ?string
    {
        return $this->partnerRate;
    }

    public function setPartnerRate(?string $partnerRate): static
    {
        $this->partnerRate = $partnerRate;

        return $this;
    }

    public function getClientRate(): ?string
    {
        return $this->clientRate;
    }

    public function setClientRate(?string $clientRate): static
    {
        $this->clientRate = $clientRate;

        return $this;
    }

    public function getDepositRequired(): ?string
    {
        return $this->depositRequired;
    }

    public function setDepositRequired(?string $depositRequired): static
    {
        $this->depositRequired = $depositRequired;

        return $this;
    }

    public function getDepositAmount(): ?string
    {
        return $this->depositAmount;
    }

    public function setDepositAmount(?string $depositAmount): static
    {
        $this->depositAmount = $depositAmount;

        return $this;
    }

    public function getDepositCurrency(): ?string
    {
        return $this->depositCurrency;
    }

    public function setDepositCurrency(?string $depositCurrency): static
    {
        $this->depositCurrency = $depositCurrency;

        return $this;
    }

    public function getDepositStatus(): ?string
    {
        return $this->depositStatus;
    }

    public function setDepositStatus(?string $depositStatus): static
    {
        $this->depositStatus = $depositStatus;

        return $this;
    }

    public function getDepositRequiredAt(): DateTimeInterface
    {
        return $this->depositRequiredAt;
    }

    public function setDepositRequiredAt(DateTimeInterface $depositRequiredAt): static
    {
        $this->depositRequiredAt = $depositRequiredAt;

        return $this;
    }

    public function getPaymentIds(): ?array
    {
        return $this->paymentIds;
    }

    public function setPaymentIds(?array $paymentIds): static
    {
        $this->paymentIds = $paymentIds;

        return $this;
    }

    public function getCreatedAt(): ?DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?DateTimeInterface $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?DateTimeInterface $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getCoreRate(): ?string
    {
        return $this->coreRate;
    }

    public function setCoreRate(?string $coreRate): static
    {
        $this->coreRate = $coreRate;

        return $this;
    }

    public function getUniqueRequestId(): ?string
    {
        return $this->uniqueRequestId;
    }

    public function setUniqueRequestId(?string $uniqueRequestId): static
    {
        $this->uniqueRequestId = $uniqueRequestId;

        return $this;
    }
}
