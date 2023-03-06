<?php

namespace CurrencyCloud\Criteria;

use DateTime;

class FindConversionsCriteria
{
    private ?string $shortReference = null;
    private ?string $status = null;
    private ?string $parentStatus = null;
    private ?string $buyCurrency = null;
    private ?string $sellCurrency = null;
    private ?array $conversionIds = null;
    private ?DateTime $createdAtFrom = null;
    private ?DateTime $createdAtTo = null;
    private ?DateTime $updatedAtFrom = null;
    private ?DateTime $updatedAtTo = null;
    private ?string $currencyPair = null;
    private ?string $partnerBuyAmountFrom = null;
    private ?string $partnerBuyAmountTo = null;
    private ?string $partnerSellAmountFrom = null;
    private ?string $partnerSellAmountTo = null;
    private ?string $buyAmountFrom = null;
    private ?string $buyAmountTo = null;
    private ?string $sellAmountFrom = null;
    private ?string $sellAmountTo = null;
    private ?string $uniqueRequestId = null;

    public function getShortReference(): ?string
    {
        return $this->shortReference;
    }

    public function setShortReference(?string $shortReference): self
    {
        $this->shortReference = $shortReference;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getParentStatus(): ?string
    {
        return $this->parentStatus;
    }

    public function setParentStatus(?string $parentStatus): self
    {
        $this->parentStatus = $parentStatus;

        return $this;
    }

    public function getBuyCurrency(): ?string
    {
        return $this->buyCurrency;
    }

    public function setBuyCurrency(?string $buyCurrency): self
    {
        $this->buyCurrency = $buyCurrency;

        return $this;
    }

    public function getSellCurrency(): ?string
    {
        return $this->sellCurrency;
    }

    public function setSellCurrency(?string $sellCurrency): self
    {
        $this->sellCurrency = $sellCurrency;

        return $this;
    }

    public function getConversionIds(): ?array
    {
        return $this->conversionIds;
    }

    public function setConversionIds(?array $conversionIds): self
    {
        $this->conversionIds = $conversionIds;

        return $this;
    }

    public function getCreatedAtFrom(): ?DateTime
    {
        return $this->createdAtFrom;
    }

    public function setCreatedAtFrom(?DateTime $createdAtFrom): self
    {
        $this->createdAtFrom = $createdAtFrom;

        return $this;
    }

    public function getCreatedAtTo(): ?DateTime
    {
        return $this->createdAtTo;
    }

    public function setCreatedAtTo(?DateTime $createdAtTo): self
    {
        $this->createdAtTo = $createdAtTo;

        return $this;
    }

    public function getUpdatedAtFrom(): ?DateTime
    {
        return $this->updatedAtFrom;
    }

    public function setUpdatedAtFrom(?DateTime $updatedAtFrom): self
    {
        $this->updatedAtFrom = $updatedAtFrom;

        return $this;
    }

    public function getUpdatedAtTo(): ?DateTime
    {
        return $this->updatedAtTo;
    }

    public function setUpdatedAtTo(?DateTime $updatedAtTo): self
    {
        $this->updatedAtTo = $updatedAtTo;

        return $this;
    }

    public function getCurrencyPair(): ?string
    {
        return $this->currencyPair;
    }

    public function setCurrencyPair(?string $currencyPair): self
    {
        $this->currencyPair = $currencyPair;

        return $this;
    }

    public function getPartnerBuyAmountFrom(): ?string
    {
        return $this->partnerBuyAmountFrom;
    }

    public function setPartnerBuyAmountFrom(?string $partnerBuyAmountFrom): self
    {
        $this->partnerBuyAmountFrom = $partnerBuyAmountFrom;

        return $this;
    }

    public function getPartnerBuyAmountTo(): ?string
    {
        return $this->partnerBuyAmountTo;
    }

    public function setPartnerBuyAmountTo(?string $partnerBuyAmountTo): self
    {
        $this->partnerBuyAmountTo = $partnerBuyAmountTo;

        return $this;
    }

    public function getPartnerSellAmountFrom(): ?string
    {
        return $this->partnerSellAmountFrom;
    }

    public function setPartnerSellAmountFrom(?string $partnerSellAmountFrom): self
    {
        $this->partnerSellAmountFrom = $partnerSellAmountFrom;

        return $this;
    }

    public function getPartnerSellAmountTo(): ?string
    {
        return $this->partnerSellAmountTo;
    }

    public function setPartnerSellAmountTo(?string $partnerSellAmountTo): self
    {
        $this->partnerSellAmountTo = $partnerSellAmountTo;

        return $this;
    }

    public function getBuyAmountFrom(): ?string
    {
        return $this->buyAmountFrom;
    }

    public function setBuyAmountFrom(?string $buyAmountFrom): self
    {
        $this->buyAmountFrom = $buyAmountFrom;

        return $this;
    }

    public function getBuyAmountTo(): ?string
    {
        return $this->buyAmountTo;
    }

    public function setBuyAmountTo(?string $buyAmountTo): self
    {
        $this->buyAmountTo = $buyAmountTo;

        return $this;
    }

    public function getSellAmountFrom(): ?string
    {
        return $this->sellAmountFrom;
    }

    public function setSellAmountFrom(?string $sellAmountFrom): self
    {
        $this->sellAmountFrom = $sellAmountFrom;

        return $this;
    }

    public function getSellAmountTo(): ?string
    {
        return $this->sellAmountTo;
    }

    public function setSellAmountTo(?string $sellAmountTo): self
    {
        $this->sellAmountTo = $sellAmountTo;

        return $this;
    }

    public function getUniqueRequestId(): ?string
    {
        return $this->uniqueRequestId;
    }

    public function setUniqueRequestId(?string $uniqueRequestId): self
    {
        $this->uniqueRequestId = $uniqueRequestId;

        return $this;
    }
}
