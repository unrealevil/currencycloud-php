<?php

namespace CurrencyCloud\Model;

use DateTime;

class MarginBalanceTopUp
{
    private string $accountId;
    private string $currency;
    private string $transferredAmount;
    private DateTime $transferCompletedAt;

    public function __construct(?string $accountId, ?string $currency, ?string $transferredAmount, DateTime $transferCompletedAt)
    {
        $this->accountId = (string) $accountId;
        $this->currency = (string) $currency;
        $this->transferredAmount = (string) $transferredAmount;
        $this->transferCompletedAt = $transferCompletedAt;
    }

    public function getAccountId(): string
    {
        return $this->accountId;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getTransferredAmount(): string
    {
        return $this->transferredAmount;
    }

    public function getTransferCompletedAt(): DateTime
    {
        return $this->transferCompletedAt;
    }
}
