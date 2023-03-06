<?php

namespace CurrencyCloud\Model;

use DateTime;

class  TransactionSender implements EntityInterface
{
    private ?string $id;
    private ?string $amount;
    private ?string $currency;
    private ?string $additionalInformation;
    private ?DateTime $valueDate;
    private ?string $sender;
    private ?string $receivingAcountNumber;
    private ?string $receivingAcountIban;
    private ?DateTime $createdAt;
    private ?DateTime $updatedAt;

    public function __construct(?string $id, ?string $amount, ?string $currency, ?string $additionalInformation, ?DateTime $valueDate, ?string $sender, ?string $receivingAcountNumber, ?string $receivingAcountIban, ?DateTime $createdAt, ?DateTime $updatedAt)
    {
        $this->id = $id;
        $this->amount = $amount;
        $this->currency = $currency;
        $this->additionalInformation = $additionalInformation;
        $this->valueDate = $valueDate;
        $this->sender = $sender;
        $this->receivingAcountNumber = $receivingAcountNumber;
        $this->receivingAcountIban = $receivingAcountIban;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }

    public function getId(): ?string
    {
        return $this->id;
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

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    public function getAdditionalInformation(): ?string
    {
        return $this->additionalInformation;
    }

    public function setAdditionalInformation(?string $additionalInformation): self
    {
        $this->additionalInformation = $additionalInformation;

        return $this;
    }

    public function getValueDate(): ?DateTime
    {
        return $this->valueDate;
    }

    public function setValueDate(?DateTime $valueDate): self
    {
        $this->valueDate = $valueDate;

        return $this;
    }

    public function getSender(): ?string
    {
        return $this->sender;
    }

    public function setSender(?string $sender): self
    {
        $this->sender = $sender;

        return $this;
    }

    public function getReceivingAcountNumber(): ?string
    {
        return $this->receivingAcountNumber;
    }

    public function setReceivingAcountNumber(?string $receivingAcountNumber): self
    {
        $this->receivingAcountNumber = $receivingAcountNumber;

        return $this;
    }

    public function getReceivingAcountIban(): ?string
    {
        return $this->receivingAcountIban;
    }

    public function setReceivingAcountIban(?string $receivingAcountIban): self
    {
        $this->receivingAcountIban = $receivingAcountIban;

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
