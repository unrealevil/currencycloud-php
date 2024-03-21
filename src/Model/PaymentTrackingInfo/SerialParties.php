<?php

namespace CurrencyCloud\Model\PaymentTrackingInfo;

class SerialParties
{
    private ?string $debtor;
    private ?string $debtorAgent;
    private ?string $intermediaryAgent1;
    private ?string $instructingReimbursementAgent;
    private ?string $creditorAgent;
    private ?string $creditor;

    public function __construct(?string $debtor = null, ?string $debtorAgent = null, ?string $intermediaryAgent1 = null, ?string $instructingReimbursementAgent = null, ?string $creditorAgent = null, ?string $creditor = null)
    {
        $this->debtor = $debtor;
        $this->debtorAgent = $debtorAgent;
        $this->intermediaryAgent1 = $intermediaryAgent1;
        $this->instructingReimbursementAgent = $instructingReimbursementAgent;
        $this->creditorAgent = $creditorAgent;
        $this->creditor = $creditor;
    }

    public function getDebtor(): ?string
    {
        return $this->debtor;
    }

    public function getDebtorAgent(): ?string
    {
        return $this->debtorAgent;
    }

    public function getIntermediaryAgent1(): ?string
    {
        return $this->intermediaryAgent1;
    }

    public function getInstructingReimbursementAgent(): ?string
    {
        return $this->instructingReimbursementAgent;
    }

    public function getCreditorAgent(): ?string
    {
        return $this->creditorAgent;
    }

    public function getCreditor(): ?string
    {
        return $this->creditor;
    }
}
