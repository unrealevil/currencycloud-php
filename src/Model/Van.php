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

    public function getVirtualAccountNumber(): ?string
    {
        return $this->virtualAccountNumber;
    }

    public function getAccountHolderName(): ?string
    {
        return $this->accountHolderName;
    }

    public function getBankInstitutionName(): ?string
    {
        return $this->bankInstitutionName;
    }

    public function getBankInstitutionAddress(): ?string
    {
        return $this->bankInstitutionAddress;
    }


    public function getBankInstitutionCountry(): ?string
    {
        return $this->bankInstitutionCountry;
    }

    public function getRoutingCode(): ?string
    {
        return $this->routingCode;
    }

    public function getCreatedAt(): ?DateTime
    {
        return $this->createdAt;
    }

    public function getUpdatedAt(): ?DateTime
    {
        return $this->updatedAt;
    }
}
