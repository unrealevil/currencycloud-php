<?php

namespace CurrencyCloud\Model;

use ArrayIterator;
use Traversable;

class ConversionProfitLossCollection extends PaginatedData
{
    /**
     * @var ConversionProfitLoss[]
     */
    private array $conversionsProfitLoss;

    /**
     * @param ConversionProfitLoss[] $conversionsProfitLoss
     */
    public function __construct(array $conversionsProfitLoss, Pagination $pagination)
    {
        parent::__construct($pagination);
        $this->conversionsProfitLoss = $conversionsProfitLoss;
    }

    /**
     * @return ConversionProfitLoss[]
     */
    public function getConversionsProfitLoss(): array
    {
        return $this->conversionsProfitLoss;
    }

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->conversionsProfitLoss);
    }

    public function count(): int
    {
        return \count($this->conversionsProfitLoss);
    }
}
