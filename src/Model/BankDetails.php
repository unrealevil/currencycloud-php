<?php

namespace CurrencyCloud\Model;

class BankDetails
{
    private ?string $identifierValue;
    private ?string $identifierType;
    private ?string $accountNumber;
    private ?string $bicSwift;
    private ?string $bankName;
    private ?string $bankBranch;
    private ?string $bankAddress;
    private ?string $bankCity;
    private ?string $bankState;
    private ?string $bankPostCode;
    private ?string $bankCountry;
    private ?string $bankCountryISO;
    private ?string $currency;

    public function __construct(
        ?string $identifierValue,
        ?string $identifierType, ?string $accountNumber, ?string $bicSwift, ?string $bankName, ?string $bankBranch,
        ?string $bankAddress, ?string $bankCity, ?string $bankState, ?string $bankPostCode, ?string $bankCountry,
        ?string $bankCountryISO, ?string $currency
    )
    {
        $this->identifierValue = (string) $identifierValue;
        $this->identifierType = (string) $identifierType;
        $this->accountNumber = (string) $accountNumber;
        $this->bicSwift = (string) $bicSwift;
        $this->bankName = (string) $bankName;
        $this->bankBranch = (string) $bankBranch;
        $this->bankAddress = (string) $bankAddress;
        $this->bankCity = (string) $bankCity;
        $this->bankState = (string) $bankState;
        $this->bankPostCode = (string) $bankPostCode;
        $this->bankCountry = (string) $bankCountry;
        $this->bankCountryISO = (string) $bankCountryISO;
        $this->currency = (string) $currency;
    }

    public function getIdentifierValue(): string
    {
        return $this->identifierValue;
    }

    public function getIdentifierType(): string
    {
        return $this->identifierType;
    }

    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }

    public function getBicSwift(): string
    {
        return $this->bicSwift;
    }

    public function getBankName(): string
    {
        return $this->bankName;
    }

    public function getBankBranch(): string
    {
        return $this->bankBranch;
    }

    public function getBankAddress(): string
    {
        return $this->bankAddress;
    }

    public function getBankCity(): string
    {
        return $this->bankCity;
    }

    public function getBankState(): string
    {
        return $this->bankState;
    }

    public function getBankPostCode(): string
    {
        return $this->bankPostCode;
    }

    public function getBankCountry(): string
    {
        return $this->bankCountry;
    }

    public function getBankCountryISO(): string
    {
        return $this->bankCountryISO;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }
}
