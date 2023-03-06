<?php

namespace CurrencyCloud\Model;

use DateTime;

class Iban implements EntityInterface
{
    private ?string $id = null;
    private ?string $accountId = null;
    private ?string $ibanCode = null;
    private ?string $currency = null;
    private ?string $accountHolderName = null;
    private ?string $bankInstitutionName = null;
    private ?string $bankInstitutionAddress = null;
    private ?string $bankInstitutionCountry = null;
    private ?string $bicSwift = null;
    private ?DateTime $createdAt = null;
    private ?DateTime $updatedAt = null;

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

    public function getIbanCode(): ?string
    {
        return $this->ibanCode;
    }

    public function setIbanCode(?string $ibanCode): self
    {
        $this->ibanCode = $ibanCode;

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

    public function getBicSwift(): ?string
    {
        return $this->bicSwift;
    }

    public function setBicSwift(?string $bicSwift): self
    {
        $this->bicSwift = $bicSwift;

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
