<?php

namespace CurrencyCloud\Model;

use DateTime;

class Transfer implements EntityInterface
{
    private ?string $id;
    private ?string $shortReference;
    private ?string $sourceAccountId;
    private ?string $destinationAccountId;
    private ?string $currency;
    private ?string $amount;
    private ?string $status;
    private ?string $reason;
    private ?DateTime $createdAt;
    private ?DateTime $updatedAt;
    private ?DateTime $completedAt;
    private ?string $creatorAccountId;
    private ?string $creatorContactId;

    public function __construct(?string $id, ?string $shortReference, ?string $sourceAccountId, ?string $destinationAccountId, ?string $currency, ?string $amount, ?string $status, ?string $reason, ?DateTime $createdAt, ?DateTime $updatedAt, ?DateTime $completedAt, ?string $creatorAccountId, ?string $creatorContactId)
    {
        $this->id = $id;
        $this->shortReference = $shortReference;
        $this->sourceAccountId = $sourceAccountId;
        $this->destinationAccountId = $destinationAccountId;
        $this->currency = $currency;
        $this->amount = $amount;
        $this->status = $status;
        $this->reason = $reason;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->completedAt = $completedAt;
        $this->creatorAccountId = $creatorAccountId;
        $this->creatorContactId = $creatorContactId;
    }

    public function getId(): ?string
    {
        return $this->id;
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

    public function getSourceAccountId(): ?string
    {
        return $this->sourceAccountId;
    }

    public function setSourceAccountId(?string $sourceAccountId): self
    {
        $this->sourceAccountId = $sourceAccountId;

        return $this;
    }

    public function getDestinationAccountId(): ?string
    {
        return $this->destinationAccountId;
    }

    public function setDestinationAccountId(?string $destinationAccountId): self
    {
        $this->destinationAccountId = $destinationAccountId;

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

    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function setAmount(?string $amount): self
    {
        $this->amount = $amount;

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

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function setReason(?string $reason): self
    {
        $this->reason = $reason;

        return $this;
    }

    public function getCreatedAt(): ?DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getCompletedAt(): ?DateTime
    {
        return $this->completedAt;
    }

    public function setCompletedAt(?DateTime $completedAt): self
    {
        $this->completedAt = $completedAt;

        return $this;
    }

    public function getCreatorAccountId(): ?string
    {
        return $this->creatorAccountId;
    }

    public function setCreatorAccountId(?string $creatorAccountId): self
    {
        $this->creatorAccountId = $creatorAccountId;

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
}
