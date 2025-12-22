<?php

namespace CurrencyCloud\Model;

use ArrayIterator;
use Traversable;

class Accounts extends PaginatedData
{
    /**
     * @var Account[]
     */
    private array $accounts;

    /**
     * @param Account[] $accounts
     */
    public function __construct(array $accounts, Pagination $pagination)
    {
        parent::__construct($pagination);
        $this->accounts = $accounts;
    }

    /**
     * @return Account[]
     */
    public function getAccounts(): array
    {
        return $this->accounts;
    }

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->accounts);
    }

    public function count(): int
    {
        return \count($this->accounts);
    }
}
