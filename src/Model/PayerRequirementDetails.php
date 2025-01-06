<?php

namespace CurrencyCloud\Model;

use ArrayIterator;
use Countable;
use IteratorAggregate;
use Traversable;

class PayerRequirementDetails implements Countable, IteratorAggregate
{
    /**
     * @var PayerDetails[]
     */
    private array $payerDetails;

    /**
     * @param PayerDetails[] $payerDetails
     */
    public function __construct(array $payerDetails)
    {
        $this->payerDetails = $payerDetails;
    }

    /**
     * @return PayerDetails[]
     */
    public function getPayerDetails(): array
    {
        return $this->payerDetails;
    }

    /**
     * @inheritdoc
     */
    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->payerDetails);
    }

    /**
     * @inheritdoc
     */
    public function count(): int
    {
        return \count($this->payerDetails);
    }
}
