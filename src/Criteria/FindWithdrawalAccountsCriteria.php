<?php

namespace CurrencyCloud\Criteria;

class FindWithdrawalAccountsCriteria
{
    private ?string $accountId = null;

    public function getAccountId(): ?string
    {
        return $this->accountId;
    }

    public function setAccountId(?string $accountId): self
    {
        $this->accountId = $accountId;

        return $this;
    }
}
