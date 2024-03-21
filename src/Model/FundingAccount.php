<?php

namespace CurrencyCloud\Model;

use DateTime;

class FundingAccount implements EntityInterface
{
    private ?string $id;
    private ?string $accountId;
    private ?string $accountNumber;
    private ?string $accountNumberType;
    private ?string $accountHolderName;
    private ?string $bankName;
    private ?string $bankAddress;
    private ?string $bankCountry;
    private ?string $currency;
    private ?string $paymentType;
    private ?string $routingCode;
    private ?string $routingCodeType;
    private ?DateTime $createdAt;
    private ?DateTime $updatedAt;

    public function __construct(?string $id, ?string $accountId, ?string $accountNumber, ?string $accountNumberType, ?string $accountHolderName,
        ?string $bankName, ?string $bankAddress, ?string $bankCountry, ?string $currency, ?string $paymentType, ?string $routingCode,
        ?string $routingCodeType, ?DateTime $createdAt, ?DateTime $updatedAt)
    {
        $this->id = $id;
        $this->accountId = $accountId;
        $this->accountNumber = $accountNumber;
        $this->accountNumberType = $accountNumberType;
        $this->accountHolderName = $accountHolderName;
        $this->bankName = $bankName;
        $this->bankAddress = $bankAddress;
        $this->bankCountry = $bankCountry;
        $this->currency = $currency;
        $this->paymentType = $paymentType;
        $this->routingCode = $routingCode;
        $this->routingCodeType = $routingCodeType;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getAccountId(): ?string
    {
        return $this->accountId;
    }

    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    public function getAccountNumberType(): ?string
    {
        return $this->accountNumberType;
    }

    public function getAccountHolderName(): ?string
    {
        return $this->accountHolderName;
    }

    public function getBankName(): ?string
    {
        return $this->bankName;
    }

    public function getBankAddress(): ?string
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

    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }

    public function getRoutingCode(): ?string
    {
        return $this->routingCode;
    }

    public function getRoutingCodeType(): ?string
    {
        return $this->routingCodeType;
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
