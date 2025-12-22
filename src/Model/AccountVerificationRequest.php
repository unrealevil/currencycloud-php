<?php

namespace CurrencyCloud\Model;

class AccountVerificationRequest
{
    private ?array $paymentType;
    private ?string $bankCountry;
    private ?string $currency;
    private ?string $accountNumber;
    private ?string $beneficiaryEntityType;
    private ?string $beneficiaryCompanyName;
    private ?string $beneficiaryFirstName;
    private ?string $beneficiaryLastName;
    private ?string $routingCodeType1;
    private ?string $routingCodeValue1;
    private ?string $secondaryReferenceData;

    public function __construct(
        ?array $paymentType = null,
        ?string $bankCountry = null,
        ?string $currency = null,
        ?string $accountNumber = null,
        ?string $beneficiaryEntityType = null,
        ?string $beneficiaryCompanyName = null,
        ?string $beneficiaryFirstName = null,
        ?string $beneficiaryLastName = null,
        ?string $routingCodeType1 = null,
        ?string $routingCodeValue1 = null,
        ?string $secondaryReferenceData = null
    ) {
        $this->paymentType = $paymentType;
        $this->bankCountry = $bankCountry;
        $this->currency = $currency;
        $this->accountNumber = $accountNumber;
        $this->beneficiaryEntityType = $beneficiaryEntityType;
        $this->beneficiaryCompanyName = $beneficiaryCompanyName;
        $this->beneficiaryFirstName = $beneficiaryFirstName;
        $this->beneficiaryLastName = $beneficiaryLastName;
        $this->routingCodeType1 = $routingCodeType1;
        $this->routingCodeValue1 = $routingCodeValue1;
        $this->secondaryReferenceData = $secondaryReferenceData;
    }

    public function getPaymentType(): ?array
    {
        return $this->paymentType;
    }

    public function setPaymentType(?array $paymentType): self
    {
        $this->paymentType = $paymentType;

        return $this;
    }

    public function getBankCountry(): ?string
    {
        return $this->bankCountry;
    }

    public function setBankCountry(string $bankCountry): self
    {
        $this->bankCountry = $bankCountry;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    public function setAccountNumber(string $accountNumber): self
    {
        $this->accountNumber = $accountNumber;

        return $this;
    }

    public function getBeneficiaryEntityType(): ?string
    {
        return $this->beneficiaryEntityType;
    }

    public function setBeneficiaryEntityType(string $beneficiaryEntityType): self
    {
        $this->beneficiaryEntityType = $beneficiaryEntityType;

        return $this;
    }

    public function getBeneficiaryCompanyName(): ?string
    {
        return $this->beneficiaryCompanyName;
    }

    public function setBeneficiaryCompanyName(string $beneficiaryCompanyName): self
    {
        $this->beneficiaryCompanyName = $beneficiaryCompanyName;

        return $this;
    }

    public function getBeneficiaryFirstName(): ?string
    {
        return $this->beneficiaryFirstName;
    }

    public function setBeneficiaryFirstName(string $beneficiaryFirstName): self
    {
        $this->beneficiaryFirstName = $beneficiaryFirstName;

        return $this;
    }

    public function getBeneficiaryLastName(): ?string
    {
        return $this->beneficiaryLastName;
    }

    public function setBeneficiaryLastName(string $beneficiaryLastName): self
    {
        $this->beneficiaryLastName = $beneficiaryLastName;

        return $this;
    }

    public function getRoutingCodeType1(): ?string
    {
        return $this->routingCodeType1;
    }

    public function setRoutingCodeType1(string $routingCodeType1): self
    {
        $this->routingCodeType1 = $routingCodeType1;

        return $this;
    }

    public function getRoutingCodeValue1(): ?string
    {
        return $this->routingCodeValue1;
    }

    public function setRoutingCodeValue1(string $routingCodeValue1): self
    {
        $this->routingCodeValue1 = $routingCodeValue1;

        return $this;
    }

    public function getSecondaryReferenceData(): ?string
    {
        return $this->secondaryReferenceData;
    }

    public function setSecondaryReferenceData(string $secondaryReferenceData): self
    {
        $this->secondaryReferenceData = $secondaryReferenceData;

        return $this;
    }
}
