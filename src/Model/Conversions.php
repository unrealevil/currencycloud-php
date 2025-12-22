<?php

namespace CurrencyCloud\Model;

use ArrayIterator;
use Traversable;

class Conversions extends PaginatedData
{
    /**
     * @var Conversion[]
     */
    private array $conversions;

    /**
     * @param Conversion[] $conversions
     */
    public function __construct(array $conversions, Pagination $pagination)
    {
        parent::__construct($pagination);
        $this->conversions = $conversions;
    }

    /**
     * @return Conversion[]
     */
    public function getConversions(): array
    {
        return $this->conversions;
    }

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->conversions);
    }

    public function count(): int
    {
        return \count($this->conversions);
    }
}
