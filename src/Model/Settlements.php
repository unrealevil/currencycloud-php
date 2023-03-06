<?php

namespace CurrencyCloud\Model;

use ArrayIterator;

class Settlements extends PaginatedData
{
    /**
     * @var Settlement[]
     */
    private array $settlements;

    /**
     * @param Settlement[] $settlements
     */
    public function __construct(array $settlements, Pagination $pagination)
    {
        parent::__construct($pagination);
        $this->settlements = $settlements;
    }

    /**
     * @return Settlement[]
     */
    public function getSettlements(): array
    {
        return $this->settlements;
    }

    /**
     * @inheritdoc
     */
    public function getIterator(): \Traversable
    {
        return new ArrayIterator($this->settlements);
    }

    /**
     * @inheritdoc
     */
    public function count(): int
    {
        return count($this->settlements);
    }
}
