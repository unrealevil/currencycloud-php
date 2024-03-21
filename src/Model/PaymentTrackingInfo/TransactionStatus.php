<?php

namespace CurrencyCloud\Model\PaymentTrackingInfo;

class TransactionStatus
{
    private string $status;
    private string $reason;

    public function __construct(string $status, string $reason)
    {
        $this->status = $status;
        $this->reason = $reason;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getReason(): string
    {
        return $this->reason;
    }
}
