<?php

namespace CurrencyCloud\Model;

use DateTimeInterface;

class Balance
{
    private ?string $id = null;
    private string $accountId;
    private string $currency;
    private string $amount;
    private ?DateTimeInterface $createdAt;
    private ?DateTimeInterface $updatedAt;

    public function __construct(?string $accountId, ?string $currency, ?string $amount, ?DateTimeInterface $createdAt, ?DateTimeInterface $updatedAt)
    {
        $this->accountId = (string) $accountId;
        $this->currency = (string) $currency;
        $this->amount = (string) $amount;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getAccountId(): string
    {
        return $this->accountId;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getAmount(): string
    {
        return $this->amount;
    }

    public function getCreatedAt(): ?DateTimeInterface
    {
        return $this->createdAt;
    }

    public function getUpdatedAt(): ?DateTimeInterface
    {
        return $this->updatedAt;
    }
}
