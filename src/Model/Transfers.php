<?php

namespace CurrencyCloud\Model;

use ArrayIterator;
use Traversable;

class Transfers extends PaginatedData
{
    /**
     * @var Transfer[]
     */
    private array $transfers;

    /**
     * @param Transfer[] $transfers
     */
    public function __construct(array $transfers, Pagination $pagination)
    {
        parent::__construct($pagination);
        $this->transfers = $transfers;
    }

    /**
     * @return Transfer[]
     */
    public function getTransfers(): array
    {
        return $this->transfers;
    }

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->transfers);
    }

    public function count(): int
    {
        return \count($this->transfers);
    }
}
