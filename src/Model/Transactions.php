<?php

namespace CurrencyCloud\Model;

use ArrayIterator;
use Traversable;

class Transactions extends PaginatedData
{
    /**
     * @var Transaction[]
     */
    private array $transactions;

    /**
     * @param Transaction[] $transactions
     */
    public function __construct(array $transactions, Pagination $pagination)
    {
        parent::__construct($pagination);
        $this->transactions = $transactions;
    }

    /**
     * @return Transaction[]
     */
    public function getTransactions(): array
    {
        return $this->transactions;
    }

    /**
     * @inheritdoc
     */
    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->transactions);
    }

    /**
     * @inheritdoc
     */
    public function count(): int
    {
        return \count($this->transactions);
    }
}
