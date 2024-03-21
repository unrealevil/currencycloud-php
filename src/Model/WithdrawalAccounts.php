<?php

namespace CurrencyCloud\Model;

use ArrayIterator;
use Traversable;
use function count;

class WithdrawalAccounts extends PaginatedData
{
    /**
     * @var WithdrawalAccount[]
     */
    private array $withdrawalAccounts;

    /**
     * @param WithdrawalAccount[] $withdrawalAccounts
     */
    public function __construct(array $withdrawalAccounts, ?Pagination $pagination = null)
    {
        parent::__construct($pagination);
        $this->withdrawalAccounts = $withdrawalAccounts;
    }

    /**
     * @return WithdrawalAccount[]
     */
    public function getWithdrawalAccounts(): array
    {
        return $this->withdrawalAccounts;
    }

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->withdrawalAccounts);
    }

    public function count(): int
    {
        return count($this->withdrawalAccounts);
    }
}
