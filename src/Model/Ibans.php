<?php

namespace CurrencyCloud\Model;

use ArrayIterator;
use Traversable;

class Ibans extends PaginatedData
{
    /**
     * @var Iban[]
     */
    private array $ibans;

    /**
     * @param Iban[] $ibans
     * @param Pagination $pagination
     */
    public function __construct(array $ibans, Pagination $pagination)
    {
        parent::__construct($pagination);
        $this->ibans = $ibans;
    }

    /**
     * @return Iban[]
     */
    public function getIbans(): array
    {
        return $this->ibans;
    }

    /**
     * @param Iban[] $ibans
     */
    public function setIbans(array $ibans): self
    {
        $this->ibans = $ibans;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->ibans);
    }

    /**
     * @inheritdoc
     */
    public function count(): int
    {
        return \count($this->ibans);
    }
}
