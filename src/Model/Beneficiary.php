<?php

namespace CurrencyCloud\Model;

use DateTimeInterface;

class Beneficiary implements EntityInterface
{
    private ?string $id = null;
    private ?array $paymentTypes = null;
    private ?string $bankCountry = null;
    private ?string $bankName = null;
    private ?string $currency = null;
    private ?string $accountNumber = null;
    private ?string $iban = null;
    private ?array $bankAddress = null;
    private ?string $bicSwift = null;
    private ?string $creatorContactId = null;
    private ?string $bankAccountType = null;
    private ?string $beneficiaryCountry = null;
    private ?string $beneficiaryEntityType = null;
    private ?string $beneficiaryCompanyName = null;
    private ?string $beneficiaryFirstName = null;
    private ?string $beneficiaryLastName = null;
    private ?string $beneficiaryCity = null;
    private ?string $beneficiaryPostCode = null;
    private ?string $beneficiaryStateOrProvince = null;
    private ?DateTimeInterface $beneficiaryDateOfBirth = null;
    private ?string $beneficiaryIdentificationType = null;
    private ?string $beneficiaryIdentificationValue = null;
    private ?string $beneficiaryExternalReference = null;
    private ?bool $isDefaultBeneficiary = null;
    private ?string $routingCodeType1 = null;
    private ?string $routingCodeValue1 = null;
    private ?string $routingCodeType2 = null;
    private ?string $routingCodeValue2 = null;
    private ?string $beneficiaryAddress = null;
    private ?string $bankAccountHolderName = null;
    private ?string $name = null;
    private ?string $email = null;
    private ?DateTimeInterface $createdAt = null;
    private ?DateTimeInterface $updatedAt = null;

    public static function createForValidate(string $bankCountry, string $currency, string $beneficiaryCountry): Beneficiary
    {
        return (new self())->setBankCountry($bankCountry)
            ->setCurrency($currency)
            ->setBeneficiaryCountry($beneficiaryCountry);
    }

    public static function create(?string $bankAccountHolderName, ?string $bankCountry, ?string $currency, ?string $name): Beneficiary
    {
        return (new self())->setBankAccountHolderName($bankAccountHolderName)
            ->setBankCountry($bankCountry)
            ->setCurrency($currency)
            ->setName($name);
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getPaymentTypes(): ?array
    {
        return $this->paymentTypes;
    }

    public function setPaymentTypes(?array $paymentTypes): self
    {
        $this->paymentTypes = $paymentTypes;

        return $this;
    }

    public function getBankCountry(): ?string
    {
        return $this->bankCountry;
    }

    public function setBankCountry(?string $bankCountry): self
    {
        $this->bankCountry = $bankCountry;

        return $this;
    }

    public function getBankName(): ?string
    {
        return $this->bankName;
    }

    public function setBankName(?string $bankName): self
    {
        $this->bankName = $bankName;

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

    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    public function setAccountNumber(?string $accountNumber): self
    {
        $this->accountNumber = $accountNumber;

        return $this;
    }

    public function getIban(): ?string
    {
        return $this->iban;
    }

    public function setIban(?string $iban): self
    {
        $this->iban = $iban;

        return $this;
    }

    public function getBankAddress(): ?array
    {
        return $this->bankAddress;
    }

    public function setBankAddress(?array $bankAddress): self
    {
        $this->bankAddress = $bankAddress;

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

    public function getCreatorContactId(): ?string
    {
        return $this->creatorContactId;
    }

    public function setCreatorContactId(?string $creatorContactId): self
    {
        $this->creatorContactId = $creatorContactId;

        return $this;
    }

    public function getBankAccountType(): ?string
    {
        return $this->bankAccountType;
    }

    public function setBankAccountType(?string $bankAccountType): self
    {
        $this->bankAccountType = $bankAccountType;

        return $this;
    }

    public function getBeneficiaryCountry(): ?string
    {
        return $this->beneficiaryCountry;
    }

    public function setBeneficiaryCountry(?string $beneficiaryCountry): self
    {
        $this->beneficiaryCountry = $beneficiaryCountry;

        return $this;
    }

    public function getBeneficiaryEntityType(): ?string
    {
        return $this->beneficiaryEntityType;
    }

    public function setBeneficiaryEntityType(?string $beneficiaryEntityType): self
    {
        $this->beneficiaryEntityType = $beneficiaryEntityType;

        return $this;
    }

    public function getBeneficiaryCompanyName(): ?string
    {
        return $this->beneficiaryCompanyName;
    }

    public function setBeneficiaryCompanyName(?string $beneficiaryCompanyName): self
    {
        $this->beneficiaryCompanyName = $beneficiaryCompanyName;

        return $this;
    }

    public function getBeneficiaryFirstName(): ?string
    {
        return $this->beneficiaryFirstName;
    }

    public function setBeneficiaryFirstName(?string $beneficiaryFirstName): self
    {
        $this->beneficiaryFirstName = $beneficiaryFirstName;

        return $this;
    }

    public function getBeneficiaryLastName(): ?string
    {
        return $this->beneficiaryLastName;
    }

    public function setBeneficiaryLastName(?string $beneficiaryLastName): self
    {
        $this->beneficiaryLastName = $beneficiaryLastName;

        return $this;
    }

    public function getBeneficiaryCity(): ?string
    {
        return $this->beneficiaryCity;
    }

    public function setBeneficiaryCity(?string $beneficiaryCity): self
    {
        $this->beneficiaryCity = $beneficiaryCity;

        return $this;
    }

    public function getBeneficiaryPostCode(): ?string
    {
        return $this->beneficiaryPostCode;
    }

    public function setBeneficiaryPostCode(?string $beneficiaryPostCode): self
    {
        $this->beneficiaryPostCode = $beneficiaryPostCode;

        return $this;
    }

    public function getBeneficiaryStateOrProvince(): ?string
    {
        return $this->beneficiaryStateOrProvince;
    }

    public function setBeneficiaryStateOrProvince(?string $beneficiaryStateOrProvince): self
    {
        $this->beneficiaryStateOrProvince = $beneficiaryStateOrProvince;

        return $this;
    }

    public function getBeneficiaryDateOfBirth(): ?DateTimeInterface
    {
        return $this->beneficiaryDateOfBirth;
    }

    public function setBeneficiaryDateOfBirth(?DateTimeInterface $beneficiaryDateOfBirth): self
    {
        $this->beneficiaryDateOfBirth = $beneficiaryDateOfBirth;

        return $this;
    }

    public function getBeneficiaryIdentificationType(): ?string
    {
        return $this->beneficiaryIdentificationType;
    }

    public function setBeneficiaryIdentificationType(?string $beneficiaryIdentificationType): self
    {
        $this->beneficiaryIdentificationType = $beneficiaryIdentificationType;

        return $this;
    }

    public function getBeneficiaryIdentificationValue(): ?string
    {
        return $this->beneficiaryIdentificationValue;
    }

    public function setBeneficiaryIdentificationValue(?string $beneficiaryIdentificationValue): self
    {
        $this->beneficiaryIdentificationValue = $beneficiaryIdentificationValue;

        return $this;
    }

    public function getBeneficiaryExternalReference(): ?string
    {
        return $this->beneficiaryExternalReference;
    }

    public function setBeneficiaryExternalReference(?string $beneficiaryExternalReference): self
    {
        $this->beneficiaryExternalReference = $beneficiaryExternalReference;

        return $this;
    }

    public function isDefaultBeneficiary(): ?bool
    {
        return $this->isDefaultBeneficiary;
    }

    public function setIsDefaultBeneficiary(?bool $isDefaultBeneficiary): self
    {
        $this->isDefaultBeneficiary = $isDefaultBeneficiary;

        return $this;
    }

    public function getRoutingCodeType1(): ?string
    {
        return $this->routingCodeType1;
    }

    public function setRoutingCodeType1(?string $routingCodeType1): self
    {
        $this->routingCodeType1 = $routingCodeType1;

        return $this;
    }

    public function getRoutingCodeValue1(): ?string
    {
        return $this->routingCodeValue1;
    }

    public function setRoutingCodeValue1(?string $routingCodeValue1): self
    {
        $this->routingCodeValue1 = $routingCodeValue1;

        return $this;
    }

    public function getRoutingCodeType2(): ?string
    {
        return $this->routingCodeType2;
    }

    public function setRoutingCodeType2(?string $routingCodeType2): self
    {
        $this->routingCodeType2 = $routingCodeType2;

        return $this;
    }

    public function getRoutingCodeValue2(): ?string
    {
        return $this->routingCodeValue2;
    }

    public function setRoutingCodeValue2(?string $routingCodeValue2): self
    {
        $this->routingCodeValue2 = $routingCodeValue2;

        return $this;
    }

    public function getBeneficiaryAddress(): ?string
    {
        return $this->beneficiaryAddress;
    }

    public function setBeneficiaryAddress(?string $beneficiaryAddress): self
    {
        $this->beneficiaryAddress = $beneficiaryAddress;

        return $this;
    }

    public function getBankAccountHolderName(): ?string
    {
        return $this->bankAccountHolderName;
    }

    public function setBankAccountHolderName(?string $bankAccountHolderName): self
    {
        $this->bankAccountHolderName = $bankAccountHolderName;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

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
}
