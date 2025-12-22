<?php

namespace CurrencyCloud\Model;

use ArrayIterator;
use Traversable;

class Balances extends PaginatedData
{
    /**
     * @var Balance[]
     */
    private array $balances;

    /**
     * @param Balance[] $balances
     */
    public function __construct(array $balances, Pagination $pagination)
    {
        parent::__construct($pagination);
        $this->balances = $balances;
    }

    /**
     * @return Balance[]
     */
    public function getBalances(): array
    {
        return $this->balances;
    }

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->balances);
    }

    public function count(): int
    {
        return \count($this->balances);
    }
}
