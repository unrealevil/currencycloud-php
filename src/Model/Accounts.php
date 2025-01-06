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
     * @param Pagination $pagination
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

    /**
     * @inheritdoc
     */
    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->accounts);
    }

    /**
     * @inheritdoc
     */
    public function count(): int
    {
        return \count($this->accounts);
    }
}
