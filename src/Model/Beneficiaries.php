<?php

namespace CurrencyCloud\Model;

use ArrayIterator;
use Traversable;

class Beneficiaries extends PaginatedData
{
    /**
     * @var Beneficiary[]
     */
    private array $beneficiaries;

    /**
     * @param Beneficiary[] $beneficiaries
     * @param Pagination $pagination
     */
    public function __construct(array $beneficiaries, Pagination $pagination)
    {
        parent::__construct($pagination);
        $this->beneficiaries = $beneficiaries;
    }

    /**
     * @return Beneficiary[]
     */
    public function getBeneficiaries(): array
    {
        return $this->beneficiaries;
    }

    /**
     * @inheritdoc
     */
    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->beneficiaries);
    }

    /**
     * @inheritdoc
     */
    public function count(): int
    {
        return count($this->beneficiaries);
    }
}
