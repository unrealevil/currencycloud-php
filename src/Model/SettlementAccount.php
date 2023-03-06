<?php

namespace CurrencyCloud\Model;

class SettlementAccount
{
    private ?string $bankAccountHolderName;
    private string|array|null $beneficiaryAddress;
    private ?string $beneficiaryCountry;
    private ?string $bankName;
    private ?array $bankAddress;
    private ?string $bankCountry;
    private ?string $currency;
    private ?string $bicSwift;
    private ?string $iban;
    private ?string $accountNumber;
    private ?string $routingCodeType1;
    private ?string $routingCodeValue1;
    private ?string $routingCodeType2;
    private ?string $routingCodeValue2;

    public function __construct(
        ?string $bankAccountHolderName,
        string|array|null $beneficiaryAddress,
        ?string $beneficiaryCountry,
        ?string $bankName,
        ?array $bankAddress,
        ?string $bankCountry,
        ?string $currency,
        ?string $bicSwift,
        ?string $iban,
        ?string $accountNumber,
        ?string $routingCodeType1,
        ?string $routingCodeValue1,
        ?string $routingCodeType2,
        ?string $routingCodeValue2
    ) {
        $this->bankAccountHolderName = (string) $bankAccountHolderName;
        $this->beneficiaryAddress = (string) $beneficiaryAddress;
        $this->beneficiaryCountry = (string) $beneficiaryCountry;
        $this->bankName = (string) $bankName;
        $this->bankAddress = $bankAddress;
        $this->bankCountry = (string) $bankCountry;
        $this->currency = (string) $currency;
        $this->bicSwift = (string) $bicSwift;
        $this->iban = (string) $iban;
        $this->accountNumber = (string) $accountNumber;
        $this->routingCodeType1 = (string) $routingCodeType1;
        $this->routingCodeValue1 = (string) $routingCodeValue1;
        $this->routingCodeType2 = (string) $routingCodeType2;
        $this->routingCodeValue2 = (string) $routingCodeValue2;
    }

    public function getBankAccountHolderName(): ?string
    {
        return $this->bankAccountHolderName;
    }

    public function getBeneficiaryAddress(): array|string|null
    {
        return $this->beneficiaryAddress;
    }

    public function getBeneficiaryCountry(): ?string
    {
        return $this->beneficiaryCountry;
    }

    public function getBankName(): ?string
    {
        return $this->bankName;
    }

    public function getBankAddress(): ?array
    {
        return $this->bankAddress;
    }

    public function getBankCountry(): ?string
    {
        return $this->bankCountry;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function getBicSwift(): ?string
    {
        return $this->bicSwift;
    }

    public function getIban(): ?string
    {
        return $this->iban;
    }

    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    public function getRoutingCodeType1(): ?string
    {
        return $this->routingCodeType1;
    }

    public function getRoutingCodeValue1(): ?string
    {
        return $this->routingCodeValue1;
    }

    public function getRoutingCodeType2(): ?string
    {
        return $this->routingCodeType2;
    }

    public function getRoutingCodeValue2(): ?string
    {
        return $this->routingCodeValue2;
    }
}
