<?php
namespace CurrencyCloud\Model;

use ArrayIterator;

class ConversionProfitLossCollection extends PaginatedData
{
    /**
     * @var ConversionProfitLoss[]
     */
    private array $conversionsProfitLoss;

    /**
     * @param ConversionProfitLoss[] $conversionsProfitLoss
     * @param Pagination $pagination
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

    /**
     * @inheritdoc
     */
    public function getIterator(): \Traversable
    {
        return new ArrayIterator($this->conversionsProfitLoss);
    }

    /**
     * @inheritdoc
     */
    public function count(): int
    {
        return count($this->conversionsProfitLoss);
    }
}
