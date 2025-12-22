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

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->beneficiaries);
    }

    public function count(): int
    {
        return \count($this->beneficiaries);
    }
}
