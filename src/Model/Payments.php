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
     * @param Pagination $pagination
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

    /**
     * @inheritdoc
     */
    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->payments);
    }

    /**
     * @inheritdoc
     */
    public function count(): int
    {
        return count($this->payments);
    }
}
