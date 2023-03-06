<?php
namespace CurrencyCloud\Model;

use DateTime;

class PaymentConfirmation implements EntityInterface
{
    private ?string $id;
    private ?string $paymentId;
    private ?string $accountId;
    private ?string $shortReference;
    private ?string $status;
    private ?string $confirmationUrl;
    private ?DateTime $createdAt;
    private ?DateTime $updatedAt;
    private ?DateTime $expiresAt;

    public function __construct(?string $id, ?string $paymentId, ?string $accountId, ?string $shortReference, ?string $status, ?string $confirmationUrl, ?DateTime $createdAt, ?DateTime $updatedAt, ?DateTime $expiresAt)
    {
        $this->id = $id;
        $this->paymentId = $paymentId;
        $this->accountId = $accountId;
        $this->shortReference = $shortReference;
        $this->status = $status;
        $this->confirmationUrl = $confirmationUrl;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->expiresAt = $expiresAt;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getPaymentId(): ?string
    {
        return $this->paymentId;
    }

    public function getAccountId(): ?string
    {
        return $this->accountId;
    }

    public function getShortReference(): ?string
    {
        return $this->shortReference;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function getConfirmationUrl(): ?string
    {
        return $this->confirmationUrl;
    }

    public function getCreatedAt(): ?DateTime
    {
        return $this->createdAt;
    }

    public function getUpdatedAt(): ?DateTime
    {
        return $this->updatedAt;
    }

    public function getExpiresAt(): ?DateTime
    {
        return $this->expiresAt;
    }
}
