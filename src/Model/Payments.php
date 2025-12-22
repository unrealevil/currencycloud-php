<?php

namespace CurrencyCloud\Model;

use ArrayIterator;
use Traversable;

class Payments extends PaginatedData
{
    /**
     * @var Payment[]
     */
    private array $payments;

    /**
     * @param Payment[] $payments
     */
    public function __construct(array $payments, Pagination $pagination)
    {
        parent::__construct($pagination);
        $this->payments = $payments;
    }

    /**
     * @return Payment[]
     */
    public function getPayments(): array
    {
        return $this->payments;
    }

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->payments);
    }

    public function count(): int
    {
        return \count($this->payments);
    }
}
