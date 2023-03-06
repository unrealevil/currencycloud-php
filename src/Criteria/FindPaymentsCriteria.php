<?php

namespace CurrencyCloud\Criteria;

use DateTime;

class FindPaymentsCriteria
{
    private ?DateTime $createdAtFrom = null;
    private ?DateTime $createdAtTo = null;
    private ?DateTime $updatedAtFrom = null;
    private ?DateTime $updatedAtTo = null;
    private ?DateTime $paymentDateFrom = null;
    private ?DateTime $paymentDateTo = null;
    private ?DateTime $transferredAtFrom = null;
    private ?DateTime $transferredAtTo = null;
    private ?string $amountFrom = null;
    private ?string $amountTo = null;

    public function getCreatedAtFrom(): ?DateTime
    {
        return $this->createdAtFrom;
    }

    public function setCreatedAtFrom(?DateTime $createdAtFrom): self
    {
        $this->createdAtFrom = $createdAtFrom;

        return $this;
    }

    public function getCreatedAtTo(): ?DateTime
    {
        return $this->createdAtTo;
    }

    public function setCreatedAtTo(?DateTime $createdAtTo): self
    {
        $this->createdAtTo = $createdAtTo;

        return $this;
    }

    public function getUpdatedAtFrom(): ?DateTime
    {
        return $this->updatedAtFrom;
    }

    public function setUpdatedAtFrom(?DateTime $updatedAtFrom): self
    {
        $this->updatedAtFrom = $updatedAtFrom;

        return $this;
    }

    public function getUpdatedAtTo(): ?DateTime
    {
        return $this->updatedAtTo;
    }

    public function setUpdatedAtTo(?DateTime $updatedAtTo): self
    {
        $this->updatedAtTo = $updatedAtTo;

        return $this;
    }

    public function getPaymentDateFrom(): ?DateTime
    {
        return $this->paymentDateFrom;
    }

    public function setPaymentDateFrom(?DateTime $paymentDateFrom): self
    {
        $this->paymentDateFrom = $paymentDateFrom;

        return $this;
    }

    public function getPaymentDateTo(): ?DateTime
    {
        return $this->paymentDateTo;
    }

    public function setPaymentDateTo(?DateTime $paymentDateTo): self
    {
        $this->paymentDateTo = $paymentDateTo;

        return $this;
    }

    public function getTransferredAtFrom(): ?DateTime
    {
        return $this->transferredAtFrom;
    }

    public function setTransferredAtFrom(?DateTime $transferredAtFrom): self
    {
        $this->transferredAtFrom = $transferredAtFrom;

        return $this;
    }

    public function getTransferredAtTo(): ?DateTime
    {
        return $this->transferredAtTo;
    }

    public function setTransferredAtTo(?DateTime $transferredAtTo): self
    {
        $this->transferredAtTo = $transferredAtTo;

        return $this;
    }

    public function getAmountFrom(): ?string
    {
        return $this->amountFrom;
    }

    public function setAmountFrom(?string $amountFrom): self
    {
        $this->amountFrom = $amountFrom;

        return $this;
    }

    public function getAmountTo(): ?string
    {
        return $this->amountTo;
    }

    public function setAmountTo(?string $amountTo): self
    {
        $this->amountTo = $amountTo;

        return $this;
    }
}
