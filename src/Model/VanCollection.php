<?php

namespace CurrencyCloud\Model;

use ArrayIterator;
use Traversable;

class VanCollection extends PaginatedData
{
    /**
     * @var Van[]
     */
    private array $vans;

    /**
     * @param Van[] $vans
     */
    public function __construct(array $vans, Pagination $pagination)
    {
        parent::__construct($pagination);
        $this->vans = $vans;
    }

    /**
     * @return Van[]
     */
    public function getVans(): array
    {
        return $this->vans;
    }

    /**
     * @inheritdoc
     */
    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->vans);
    }

    /**
     * @inheritdoc
     */
    public function count(): int
    {
        return count($this->vans);
    }
}
