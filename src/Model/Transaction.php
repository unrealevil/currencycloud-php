<?php

namespace CurrencyCloud\Model;

use DateTimeInterface;

class Transaction
{
    private ?string $id = null;
    private ?string $balanceId = null;
    private ?string $accountId = null;
    private ?string $currency = null;
    private ?string $amount = null;
    private ?string $balanceAmount = null;
    private ?string $type = null;
    private ?string $action = null;
    private ?string $relatedEntityType = null;
    private ?string $relatedEntityId = null;
    private ?string $relatedEntityShortReference = null;
    private ?string $status = null;
    private ?string $reason = null;
    private ?DateTimeInterface $settlesAt = null;
    private ?DateTimeInterface $createdAt = null;
    private ?DateTimeInterface $updatedAt = null;
    private ?DateTimeInterface $completedAt = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getBalanceId(): ?string
    {
        return $this->balanceId;
    }

    public function setBalanceId(?string $balanceId): self
    {
        $this->balanceId = $balanceId;

        return $this;
    }

    public function getAccountId(): ?string
    {
        return $this->accountId;
    }

    public function setAccountId(?string $accountId): self
    {
        $this->accountId = $accountId;

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

    public function getBalanceAmount(): ?string
    {
        return $this->balanceAmount;
    }

    public function setBalanceAmount(?string $balanceAmount): self
    {
        $this->balanceAmount = $balanceAmount;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getAction(): ?string
    {
        return $this->action;
    }

    public function setAction(?string $action): self
    {
        $this->action = $action;

        return $this;
    }

    public function getRelatedEntityType(): ?string
    {
        return $this->relatedEntityType;
    }

    public function setRelatedEntityType(?string $relatedEntityType): self
    {
        $this->relatedEntityType = $relatedEntityType;

        return $this;
    }

    public function getRelatedEntityId(): ?string
    {
        return $this->relatedEntityId;
    }

    public function setRelatedEntityId(?string $relatedEntityId): self
    {
        $this->relatedEntityId = $relatedEntityId;

        return $this;
    }

    public function getRelatedEntityShortReference(): ?string
    {
        return $this->relatedEntityShortReference;
    }

    public function setRelatedEntityShortReference(?string $relatedEntityShortReference): self
    {
        $this->relatedEntityShortReference = $relatedEntityShortReference;

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

    public function getSettlesAt(): ?DateTimeInterface
    {
        return $this->settlesAt;
    }

    public function setSettlesAt(?DateTimeInterface $settlesAt): self
    {
        $this->settlesAt = $settlesAt;

        return $this;
    }

    public function getCreatedAt(): ?DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getCompletedAt(): ?DateTimeInterface
    {
        return $this->completedAt;
    }

    public function setCompletedAt(?DateTimeInterface $completedAt): self
    {
        $this->completedAt = $completedAt;

        return $this;
    }
}
