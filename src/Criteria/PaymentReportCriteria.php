<?php

namespace CurrencyCloud\Criteria;

use DateTime;

class PaymentReportCriteria
{
    private ?string $onBehalfOf = null;
    private ?string $description = null;
    private ?string $currency = null;
    private ?string $amountFrom = null;
    private ?string $amountTo = null;
    private ?string $status = null;
    private ?DateTime $paymentDateFrom = null;
    private ?DateTime $paymentDateTo = null;
    private ?DateTime $transferedAtFrom = null;
    private ?DateTime $transferedAtTo = null;
    private ?DateTime $createdAtFrom = null;
    private ?DateTime $createdAtTo = null;
    private ?DateTime $updatedAtFrom = null;
    private ?DateTime $updatedAtTo = null;
    private ?string $beneficiaryId = null;
    private ?string $conversionId = null;
    private ?string $withDeleted = null;
    private ?string $paymentGroupId = null;
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

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    public function getAmountFrom(): ?string
    {
        return $this->amountFrom;
    }

    public function setAmountFrom(?string $amountFrom): self
    {
        $this->amountFrom = $amountFrom;

        return $this;
    }

    public function getAmountTo(): ?string
    {
        return $this->amountTo;
    }

    public function setAmountTo(?string $amountTo): self
    {
        $this->amountTo = $amountTo;

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

    public function getPaymentDateFrom(): ?DateTime
    {
        return $this->paymentDateFrom;
    }

    public function setPaymentDateFrom(?DateTime $paymentDateFrom): self
    {
        $this->paymentDateFrom = $paymentDateFrom;

        return $this;
    }

    public function getPaymentDateTo(): ?DateTime
    {
        return $this->paymentDateTo;
    }

    public function setPaymentDateTo(?DateTime $paymentDateTo): self
    {
        $this->paymentDateTo = $paymentDateTo;

        return $this;
    }

    public function getTransferedAtFrom(): ?DateTime
    {
        return $this->transferedAtFrom;
    }

    public function setTransferedAtFrom(?DateTime $transferedAtFrom): self
    {
        $this->transferedAtFrom = $transferedAtFrom;

        return $this;
    }

    public function getTransferedAtTo(): ?DateTime
    {
        return $this->transferedAtTo;
    }

    public function setTransferedAtTo(?DateTime $transferedAtTo): self
    {
        $this->transferedAtTo = $transferedAtTo;

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

    public function getBeneficiaryId(): ?string
    {
        return $this->beneficiaryId;
    }

    public function setBeneficiaryId(?string $beneficiaryId): self
    {
        $this->beneficiaryId = $beneficiaryId;

        return $this;
    }

    public function getConversionId(): ?string
    {
        return $this->conversionId;
    }

    public function setConversionId(?string $conversionId): self
    {
        $this->conversionId = $conversionId;

        return $this;
    }

    public function getWithDeleted(): ?string
    {
        return $this->withDeleted;
    }

    public function setWithDeleted(?string $withDeleted): self
    {
        $this->withDeleted = $withDeleted;

        return $this;
    }

    public function getPaymentGroupId(): ?string
    {
        return $this->paymentGroupId;
    }

    public function setPaymentGroupId(?string $paymentGroupId): self
    {
        $this->paymentGroupId = $paymentGroupId;

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
