<?php

namespace CurrencyCloud\Model\PaymentTrackingInfo;

use DateTime;

class PaymentEvent
{
    private ?string $trackerEventType = null;
    private ?bool $valid = null;
    private ?TransactionStatus $transactionStatus = null;
    private ?DateTime $fundsAvailable = null;
    private ?string $forwardedToAgent = null;
    private ?string $from = null;
    private ?string $to = null;
    private ?string $originator = null;
    private ?SerialParties $serialParties = null;
    private ?DateTime $senderAcknowledgementReceipt = null;
    private ?Amount $instructedAmount = null;
    private ?Amount $confirmedAmount = null;
    private ?Amount $interbankSettlementAmount = null;
    private ?DateTime $interbankSettlementDate = null;
    private ?Amount $chargeAmount = null;
    private ?string $chargeType = null;
    private ?ForeignExchangeDetails $foreignExchangeDetails = null;
    private ?DateTime $lastUpdateTime = null;

    public function getTrackerEventType(): ?string
    {
        return $this->trackerEventType;
    }

    public function setTrackerEventType(?string $trackerEventType): self
    {
        $this->trackerEventType = $trackerEventType;

        return $this;
    }

    public function isValid(): ?bool
    {
        return $this->valid;
    }

    public function setValid(?bool $valid): self
    {
        $this->valid = $valid;

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

    public function getFundsAvailable(): ?DateTime
    {
        return $this->fundsAvailable;
    }

    public function setFundsAvailable(?DateTime $fundsAvailable): self
    {
        $this->fundsAvailable = $fundsAvailable;

        return $this;
    }

    public function getForwardedToAgent(): ?string
    {
        return $this->forwardedToAgent;
    }

    public function setForwardedToAgent(?string $forwardedToAgent): self
    {
        $this->forwardedToAgent = $forwardedToAgent;

        return $this;
    }

    public function getFrom(): ?string
    {
        return $this->from;
    }

    public function setFrom(?string $from): self
    {
        $this->from = $from;

        return $this;
    }

    public function getTo(): ?string
    {
        return $this->to;
    }

    public function setTo(?string $to): self
    {
        $this->to = $to;

        return $this;
    }

    public function getOriginator(): ?string
    {
        return $this->originator;
    }

    public function setOriginator(?string $originator): self
    {
        $this->originator = $originator;

        return $this;
    }

    public function getSerialParties(): ?SerialParties
    {
        return $this->serialParties;
    }

    public function setSerialParties(?SerialParties $serialParties): self
    {
        $this->serialParties = $serialParties;

        return $this;
    }

    public function getSenderAcknowledgementReceipt(): ?DateTime
    {
        return $this->senderAcknowledgementReceipt;
    }

    public function setSenderAcknowledgementReceipt(?DateTime $senderAcknowledgementReceipt): self
    {
        $this->senderAcknowledgementReceipt = $senderAcknowledgementReceipt;

        return $this;
    }

    public function getInstructedAmount(): ?Amount
    {
        return $this->instructedAmount;
    }

    public function setInstructedAmount(?Amount $instructedAmount): self
    {
        $this->instructedAmount = $instructedAmount;

        return $this;
    }

    public function getConfirmedAmount(): ?Amount
    {
        return $this->confirmedAmount;
    }

    public function setConfirmedAmount(?Amount $confirmedAmount): self
    {
        $this->confirmedAmount = $confirmedAmount;

        return $this;
    }

    public function getInterbankSettlementAmount(): ?Amount
    {
        return $this->interbankSettlementAmount;
    }

    public function setInterbankSettlementAmount(?Amount $interbankSettlementAmount): self
    {
        $this->interbankSettlementAmount = $interbankSettlementAmount;

        return $this;
    }

    public function getInterbankSettlementDate(): ?DateTime
    {
        return $this->interbankSettlementDate;
    }

    public function setInterbankSettlementDate(?DateTime $interbankSettlementDate): self
    {
        $this->interbankSettlementDate = $interbankSettlementDate;

        return $this;
    }

    public function getChargeAmount(): ?Amount
    {
        return $this->chargeAmount;
    }

    public function setChargeAmount(?Amount $chargeAmount): self
    {
        $this->chargeAmount = $chargeAmount;

        return $this;
    }

    public function getChargeType(): ?string
    {
        return $this->chargeType;
    }

    public function setChargeType(?string $chargeType): self
    {
        $this->chargeType = $chargeType;

        return $this;
    }

    public function getForeignExchangeDetails(): ?ForeignExchangeDetails
    {
        return $this->foreignExchangeDetails;
    }

    public function setForeignExchangeDetails(?ForeignExchangeDetails $foreignExchangeDetails): self
    {
        $this->foreignExchangeDetails = $foreignExchangeDetails;

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
}
