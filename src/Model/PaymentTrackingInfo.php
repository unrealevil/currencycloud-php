<?php

namespace CurrencyCloud\Model;

use CurrencyCloud\Model\PaymentTrackingInfo\PaymentEvent;
use CurrencyCloud\Model\PaymentTrackingInfo\TransactionStatus;
use DateTime;

class PaymentTrackingInfo
{
    private ?string $uetr = null;

    private ?TransactionStatus $transactionStatus = null;

    private ?DateTime $initiationTime = null;

    private ?DateTime $completionTime = null;

    private ?DateTime $lastUpdateTime = null;

    /**
     * @var PaymentEvent[]
     */
    private ?array $paymentEvents = null;

    public function getUetr(): ?string
    {
        return $this->uetr;
    }

    public function setUetr(string $uetr): self
    {
        $this->uetr = $uetr;

        return $this;
    }

    public function getTransactionStatus(): ?TransactionStatus
    {
        return $this->transactionStatus;
    }

    public function setTransactionStatus(?TransactionStatus $transactionStatus): self
    {
        $this->transactionStatus = $transactionStatus;

        return $this;
    }

    public function getInitiationTime(): ?DateTime
    {
        return $this->initiationTime;
    }

    public function setInitiationTime(?DateTime $initiationTime): self
    {
        $this->initiationTime = $initiationTime;

        return $this;
    }

    public function getCompletionTime(): ?DateTime
    {
        return $this->completionTime;
    }

    public function setCompletionTime(?DateTime $completionTime): self
    {
        $this->completionTime = $completionTime;

        return $this;
    }

    public function getLastUpdateTime(): ?DateTime
    {
        return $this->lastUpdateTime;
    }

    public function setLastUpdateTime(?DateTime $lastUpdateTime): self
    {
        $this->lastUpdateTime = $lastUpdateTime;

        return $this;
    }

    /**
     * @return PaymentEvent[]|null
     */
    public function getPaymentEvents(): ?array
    {
        return $this->paymentEvents;
    }

    /**
     * @param PaymentEvent[] $paymentEvents
     */
    public function setPaymentEvents(array $paymentEvents): self
    {
        $this->paymentEvents = $paymentEvents;

        return $this;
    }
}
