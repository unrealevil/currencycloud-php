<?php

namespace CurrencyCloud\Model;

use DateTime;

class WithdrawalAccount implements EntityInterface
{
    private ?string $id = null;
    private ?string $accountId = null;
    private ?string $accountName = null;
    private ?string $accountHolderName = null;
    private ?DateTime $accountHolderDob = null;
    private ?string $routingCode = null;
    private ?string $accountNumber = null;
    private ?string $currency = null;

    public function getId(): ?string
    {
        return $this->id;
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

    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    public function setAccountName(?string $accountName): self
    {
        $this->accountName = $accountName;

        return $this;
    }

    public function getAccountHolderName(): ?string
    {
        return $this->accountHolderName;
    }

    public function setAccountHolderName(?string $accountHolderName): self
    {
        $this->accountHolderName = $accountHolderName;

        return $this;
    }

    public function getAccountHolderDob(): ?DateTime
    {
        return $this->accountHolderDob;
    }

    public function setAccountHolderDob(?DateTime $accountHolderDob): self
    {
        $this->accountHolderDob = $accountHolderDob;

        return $this;
    }

    public function getRoutingCode(): ?string
    {
        return $this->routingCode;
    }

    public function setRoutingCode(?string $routingCode): self
    {
        $this->routingCode = $routingCode;

        return $this;
    }

    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    public function setAccountNumber(?string $accountNumber): self
    {
        $this->accountNumber = $accountNumber;

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
}
