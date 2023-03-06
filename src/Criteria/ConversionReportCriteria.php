<?php
namespace CurrencyCloud\Criteria;

use DateTime;

class ConversionReportCriteria
{
    private ?string $onBehalfOf = null;
    private ?string $description = null;
    private ?string $buyCurrency = null;
    private ?string $sellCurrency = null;
    private ?string $clientBuyAmountFrom = null;
    private ?string $clientBuyAmountTo = null;
    private ?string $clientSellAmountFrom = null;
    private ?string $clientSellAmountTo = null;
    private ?string $partnerBuyAmountFrom = null;
    private ?string $partnerBuyAmountTo = null;
    private ?string $partnerSellAmountFrom = null;
    private ?string $partnerSellAmountTo = null;
    private ?string $clientStatus = null;
    private ?string $partnerStatus = null;
    private ?DateTime $conversionDateFrom = null;
    private ?DateTime $conversionDateTo = null;
    private ?DateTime $settlementDateFrom = null;
    private ?DateTime $settlementDateTo = null;
    private ?DateTime $createdAtFrom = null;
    private ?DateTime $createdAtTo = null;
    private ?DateTime $updatedAtFrom = null;
    private ?DateTime $updatedAtTo = null;
    private ?string $uniqueRequestId = null;
    private ?string $scope = null;

    public function getOnBehalfOf(): ?string
    {
        return $this->onBehalfOf;
    }

    public function setOnBehalfOf(?string $onBehalfOf): self
    {
        $this->onBehalfOf = $onBehalfOf;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

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

    public function getClientBuyAmountFrom(): ?string
    {
        return $this->clientBuyAmountFrom;
    }

    public function setClientBuyAmountFrom(?string $clientBuyAmountFrom): self
    {
        $this->clientBuyAmountFrom = $clientBuyAmountFrom;

        return $this;
    }

    public function getClientBuyAmountTo(): ?string
    {
        return $this->clientBuyAmountTo;
    }

    public function setClientBuyAmountTo(?string $clientBuyAmountTo): self
    {
        $this->clientBuyAmountTo = $clientBuyAmountTo;

        return $this;
    }

    public function getClientSellAmountFrom(): ?string
    {
        return $this->clientSellAmountFrom;
    }

    public function setClientSellAmountFrom(?string $clientSellAmountFrom): self
    {
        $this->clientSellAmountFrom = $clientSellAmountFrom;

        return $this;
    }

    public function getClientSellAmountTo(): ?string
    {
        return $this->clientSellAmountTo;
    }

    public function setClientSellAmountTo(?string $clientSellAmountTo): self
    {
        $this->clientSellAmountTo = $clientSellAmountTo;

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

    public function getClientStatus(): ?string
    {
        return $this->clientStatus;
    }

    public function setClientStatus(?string $clientStatus): self
    {
        $this->clientStatus = $clientStatus;

        return $this;
    }

    public function getPartnerStatus(): ?string
    {
        return $this->partnerStatus;
    }

    public function setPartnerStatus(?string $partnerStatus): self
    {
        $this->partnerStatus = $partnerStatus;

        return $this;
    }

    public function getConversionDateFrom(): ?DateTime
    {
        return $this->conversionDateFrom;
    }

    public function setConversionDateFrom(?DateTime $conversionDateFrom): self
    {
        $this->conversionDateFrom = $conversionDateFrom;

        return $this;
    }

    public function getConversionDateTo(): ?DateTime
    {
        return $this->conversionDateTo;
    }

    public function setConversionDateTo(?DateTime $conversionDateTo): self
    {
        $this->conversionDateTo = $conversionDateTo;

        return $this;
    }

    public function getSettlementDateFrom(): ?DateTime
    {
        return $this->settlementDateFrom;
    }

    public function setSettlementDateFrom(?DateTime $settlementDateFrom): self
    {
        $this->settlementDateFrom = $settlementDateFrom;

        return $this;
    }

    public function getSettlementDateTo(): ?DateTime
    {
        return $this->settlementDateTo;
    }

    public function setSettlementDateTo(?DateTime $settlementDateTo): self
    {
        $this->settlementDateTo = $settlementDateTo;

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

    public function getUniqueRequestId(): ?string
    {
        return $this->uniqueRequestId;
    }

    public function setUniqueRequestId(?string $uniqueRequestId): self
    {
        $this->uniqueRequestId = $uniqueRequestId;

        return $this;
    }

    public function getScope(): ?string
    {
        return $this->scope;
    }

    public function setScope(?string $scope): self
    {
        $this->scope = $scope;

        return $this;
    }
}
