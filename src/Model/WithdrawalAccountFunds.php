<?php

namespace CurrencyCloud\Model;

use DateTime;

class WithdrawalAccountFunds implements EntityInterface
{
    private ?string $id = null;
    private ?string $withdrawalAccountId = null;
    private ?string $reference = null;
    private ?string $amount = null;
    private ?DateTime $createAt = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getWithdrawalAccountId(): ?string
    {
        return $this->withdrawalAccountId;
    }

    public function setWithdrawalAccountId(?string $withdrawalAccountId): self
    {
        $this->withdrawalAccountId = $withdrawalAccountId;

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

    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function setAmount(?string $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getCreatedAt(): ?DateTime
    {
        return $this->createAt;
    }

    public function setCreatedAt(?DateTime $createAt): self
    {
        $this->createAt = $createAt;

        return $this;
    }
}
