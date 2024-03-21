<?php

namespace CurrencyCloud\Model;

use DateTime;

class ConversionDates
{
    /**
     * @var InvalidConversionDate[]
     */
    private array $invalidConversionDates;
    private ?DateTime $firstConversionDay;
    private ?DateTime $defaultConversionDay;
    private ?DateTime $firstConversionCutoffDatetime;
    private ?DateTime $optimizeLiquidityConversionDate;
    private ?DateTime $nextDayConversionDate;

    /**
     * @param InvalidConversionDate[] $invalidConversionDates
     */
    public function __construct(array $invalidConversionDates, ?DateTime $firstConversionDay, ?DateTime $defaultConversionDay, ?DateTime $firstConversionCutoffDatetime, ?DateTime $optimizeLiquidityConversionDate, DateTime $nextDayConversionDate)
    {
        $this->invalidConversionDates = $invalidConversionDates;
        $this->firstConversionDay = $firstConversionDay;
        $this->defaultConversionDay = $defaultConversionDay;
        $this->firstConversionCutoffDatetime = $firstConversionCutoffDatetime;
        $this->optimizeLiquidityConversionDate = $optimizeLiquidityConversionDate;
        $this->nextDayConversionDate = $nextDayConversionDate;
    }

    /**
     * @return InvalidConversionDate[]
     */
    public function getInvalidConversionDates(): array
    {
        return $this->invalidConversionDates;
    }

    public function getFirstConversionDate(): ?DateTime
    {
        return $this->firstConversionDay;
    }

    public function getDefaultConversionDate(): ?DateTime
    {
        return $this->defaultConversionDay;
    }

    public function getFirstConversionCutoffDatetime(): ?DateTime
    {
        return $this->firstConversionCutoffDatetime;
    }

    public function getOptimizeLiquidityConversionDate(): ?DateTime
    {
        return $this->optimizeLiquidityConversionDate;
    }

    public function getNextDayConversionDate(): ?DateTime
    {
        return $this->nextDayConversionDate;
    }
}
