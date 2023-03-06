<?php

namespace CurrencyCloud\Model;

use DateTime;

class Van implements EntityInterface
{
    private ?string $id;
    private ?string $account_id;
    private ?string $virtualAccountNumber;
    private ?string $accountHolderName;
    private ?string $bankInstitutionName;
    private ?string $bankInstitutionAddress;
    private ?string $bankInstitutionCountry;
    private ?string $routingCode;
    private ?DateTime $createdAt;
    private ?DateTime $updatedAt;

    public function __construct(?string $id, ?string $account_id, ?string $virtualAccountNumber, ?string $accountHolderName, ?string $bankInstitutionName, ?string $bankInstitutionAddress, ?string $bankInstitutionCountry, ?string $routingCode, ?DateTime $createdAt, ?DateTime $updatedAt)
    {
        $this->id = $id;
        $this->account_id = $account_id;
        $this->virtualAccountNumber = $virtualAccountNumber;
        $this->accountHolderName = $accountHolderName;
        $this->bankInstitutionName = $bankInstitutionName;
        $this->bankInstitutionAddress = $bankInstitutionAddress;
        $this->bankInstitutionCountry = $bankInstitutionCountry;
        $this->routingCode = $routingCode;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getAccountId(): ?string
    {
        return $this->account_id;
    }

    public function setAccountId(?string $account_id): self
    {
        $this->account_id = $account_id;

        return $this;
    }

    public function getVirtualAccountNumber(): ?string
    {
        return $this->virtualAccountNumber;
    }

    public function setVirtualAccountNumber(?string $virtualAccountNumber): self
    {
        $this->virtualAccountNumber = $virtualAccountNumber;

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

    public function getBankInstitutionName(): ?string
    {
        return $this->bankInstitutionName;
    }

    public function setBankInstitutionName(?string $bankInstitutionName): self
    {
        $this->bankInstitutionName = $bankInstitutionName;

        return $this;
    }

    public function getBankInstitutionAddress(): ?string
    {
        return $this->bankInstitutionAddress;
    }

    public function setBankInstitutionAddress(?string $bankInstitutionAddress): self
    {
        $this->bankInstitutionAddress = $bankInstitutionAddress;

        return $this;
    }

    public function getBankInstitutionCountry(): ?string
    {
        return $this->bankInstitutionCountry;
    }

    public function setBankInstitutionCountry(?string $bankInstitutionCountry): self
    {
        $this->bankInstitutionCountry = $bankInstitutionCountry;

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
}
