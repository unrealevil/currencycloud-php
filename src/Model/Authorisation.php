<?php

namespace CurrencyCloud\Model;

class Authorisation
{
    private ?string $paymentId;
    private ?string $paymentStatus;
    private ?bool $updated;
    private ?string $error;
    private ?int $authSteptsTaken;
    private ?int $authSteptsRequired;
    private ?string $shortReference;

    public function __construct(?string $paymentId, ?string $paymentStatus, ?bool $updated, ?string $error, ?int $authSteptsTaken, ?int $authSteptsRequired, ?string $shortReference)
    {
        $this->paymentId = $paymentId;
        $this->paymentStatus = $paymentStatus;
        $this->updated = $updated;
        $this->error = $error;
        $this->authSteptsTaken = $authSteptsTaken;
        $this->authSteptsRequired = $authSteptsRequired;
        $this->shortReference = $shortReference;
    }

    public function getPaymentId(): ?string
    {
        return $this->paymentId;
    }

    public function getPaymentStatus(): ?string
    {
        return $this->paymentStatus;
    }

    public function getUpdated(): ?bool
    {
        return $this->updated;
    }

    public function getError(): ?string
    {
        return $this->error;
    }

    public function getAuthSteptsTaken(): ?int
    {
        return $this->authSteptsTaken;
    }

    public function getAuthSteptsRequired(): ?int
    {
        return $this->authSteptsRequired;
    }

    public function getShortReference(): ?string
    {
        return $this->shortReference;
    }
}
