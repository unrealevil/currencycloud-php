<?php

namespace CurrencyCloud\Model;

use ArrayIterator;
use Traversable;

class Reports extends PaginatedData
{
    /**
     * @var Report[]
     */
    private array $reports;

    /**
     * @param Report[] $reports
     */
    public function __construct(array $reports, Pagination $pagination)
    {
        parent::__construct($pagination);
        $this->reports = $reports;
    }

    /**
     * @return Report[]
     */
    public function getReports(): array
    {
        return $this->reports;
    }

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->reports);
    }

    public function count(): int
    {
        return \count($this->reports);
    }
}
