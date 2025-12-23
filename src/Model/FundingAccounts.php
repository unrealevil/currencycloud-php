<?php

namespace CurrencyCloud\Model;

use ArrayIterator;
use Traversable;

class FundingAccounts extends PaginatedData
{
    /**
     * @var FundingAccount[]
     */
    private array $fundingAccounts;

    /**
     * @param FundingAccount[] $fundingAccounts
     */
    public function __construct(array $fundingAccounts, ?Pagination $pagination)
    {
        parent::__construct($pagination);
        $this->fundingAccounts = $fundingAccounts;
    }

    /**
     * @return FundingAccount[]
     */
    public function getFundingAccounts(): array
    {
        return $this->fundingAccounts;
    }

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->fundingAccounts);
    }

    public function count(): int
    {
        return \count($this->fundingAccounts);
    }
}
