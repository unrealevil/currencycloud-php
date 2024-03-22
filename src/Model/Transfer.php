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
    private ?string $uniqueRequestId;

    public function __construct(?string $id, ?string $shortReference, ?string $sourceAccountId, ?string $destinationAccountId, ?string $currency, ?string $amount, ?string $status, ?string $reason, ?DateTime $createdAt, ?DateTime $updatedAt, ?DateTime $completedAt, ?string $creatorAccountId, ?string $creatorContactId, ?string $uniqueRequestId)
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
        $this->uniqueRequestId = $uniqueRequestId;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getShortReference(): ?string
    {
        return $this->shortReference;
    }

    public function getSourceAccountId(): ?string
    {
        return $this->sourceAccountId;
    }

    public function getDestinationAccountId(): ?string
    {
        return $this->destinationAccountId;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function getCreatedAt(): ?DateTime
    {
        return $this->createdAt;
    }

    public function getUpdatedAt(): ?DateTime
    {
        return $this->updatedAt;
    }

    public function getCompletedAt(): ?DateTime
    {
        return $this->completedAt;
    }

    public function getCreatorAccountId(): ?string
    {
        return $this->creatorAccountId;
    }

    public function getCreatorContactId(): ?string
    {
        return $this->creatorContactId;
    }

    public function getUniqueRequestId(): ?string
    {
        return $this->uniqueRequestId;
    }
}
