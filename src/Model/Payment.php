<?php

namespace CurrencyCloud\Model;

class Payment implements EntityInterface
{
    private ?string $id = null;

    private ?string $shortReference = null;

    private ?string $beneficiaryId = null;

    private ?string $conversionId = null;

    private ?string $amount = null;

    private ?string $currency = null;

    private ?string $status = null;

    private ?string $reviewStatus = null;

    private ?string $paymentType = null;

    private ?string $reference = null;

    private ?string $reason = null;

    private ?\DateTimeInterface $paymentDate = null;

    private ?\DateTimeInterface $transferredAt = null;

    private ?string $authorisationStepsRequired = null;

    private ?string $creatorContactId = null;

    private ?string $lastUpdaterContactId = null;

    private ?string $failureReason = null;

    private ?string $payerDetailsSource = null;

    private ?string $payerId = null;

    private ?\DateTimeInterface $createdAt = null;

    private ?\DateTimeInterface $updatedAt = null;

    private ?string $uniqueRequestId = null;

    private ?string $failureReturnedAmount = null;

    private ?string $purposeCode = null;

    private ?string $chargeType = null;

    public static function create(?string $currency, ?string $beneficiaryId, ?string $amount, ?string $reason, ?string $reference): self
    {
        return (new self())
            ->setCurrency($currency)
            ->setBeneficiaryId($beneficiaryId)
            ->setAmount($amount)
            ->setReason($reason)
            ->setReference($reference);
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getShortReference(): ?string
    {
        return $this->shortReference;
    }

    public function setShortReference(?string $shortReference): self
    {
        $this->shortReference = $shortReference;

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

    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function setAmount(?string $amount): self
    {
        $this->amount = $amount;

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

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getReviewStatus(): ?string
    {
        return $this->reviewStatus;
    }

    public function setReviewStatus(?string $reviewStatus): self
    {
        $this->reviewStatus = $reviewStatus;

        return $this;
    }

    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }

    public function setPaymentType(?string $paymentType): self
    {
        $this->paymentType = $paymentType;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function setReason(?string $reason): self
    {
        $this->reason = $reason;

        return $this;
    }

    public function getPaymentDate(): ?\DateTimeInterface
    {
        return $this->paymentDate;
    }

    public function setPaymentDate(?\DateTimeInterface $paymentDate): self
    {
        $this->paymentDate = $paymentDate;

        return $this;
    }

    public function getTransferredAt(): ?\DateTimeInterface
    {
        return $this->transferredAt;
    }

    public function setTransferredAt(?\DateTimeInterface $transferredAt): self
    {
        $this->transferredAt = $transferredAt;

        return $this;
    }

    public function getAuthorisationStepsRequired(): ?string
    {
        return $this->authorisationStepsRequired;
    }

    public function setAuthorisationStepsRequired(?string $authorisationStepsRequired): self
    {
        $this->authorisationStepsRequired = $authorisationStepsRequired;

        return $this;
    }

    public function getCreatorContactId(): ?string
    {
        return $this->creatorContactId;
    }

    public function setCreatorContactId(?string $creatorContactId): self
    {
        $this->creatorContactId = $creatorContactId;

        return $this;
    }

    public function getLastUpdaterContactId(): ?string
    {
        return $this->lastUpdaterContactId;
    }

    public function setLastUpdaterContactId(?string $lastUpdaterContactId): self
    {
        $this->lastUpdaterContactId = $lastUpdaterContactId;

        return $this;
    }

    public function getFailureReason(): ?string
    {
        return $this->failureReason;
    }

    public function setFailureReason(?string $failureReason): self
    {
        $this->failureReason = $failureReason;

        return $this;
    }

    public function getPayerDetailsSource(): ?string
    {
        return $this->payerDetailsSource;
    }

    public function setPayerDetailsSource(?string $payerDetailsSource): self
    {
        $this->payerDetailsSource = $payerDetailsSource;

        return $this;
    }

    public function getPayerId(): ?string
    {
        return $this->payerId;
    }

    public function setPayerId(?string $payerId): self
    {
        $this->payerId = $payerId;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

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

    public function getFailureReturnedAmount(): ?string
    {
        return $this->failureReturnedAmount;
    }

    public function setFailureReturnedAmount(?string $failureReturnedAmount): self
    {
        $this->failureReturnedAmount = $failureReturnedAmount;

        return $this;
    }

    public function getPurposeCode(): ?string
    {
        return $this->purposeCode;
    }

    public function setPurposeCode(?string $purposeCode): self
    {
        $this->purposeCode = $purposeCode;

        return $this;
    }

    public function getChargeType(): ?string
    {
        return $this->chargeType;
    }

    public function setChargeType(?string $chargeType): self
    {
        $this->chargeType = $chargeType;

        return $this;
    }
}
