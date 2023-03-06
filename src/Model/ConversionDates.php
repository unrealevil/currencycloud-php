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

    /**
     * @param InvalidConversionDate[] $invalidConversionDates
     */
    public function __construct(array $invalidConversionDates, ?DateTime $firstConversionDay, ?DateTime $defaultConversionDay)
    {
        $this->invalidConversionDates = $invalidConversionDates;
        $this->firstConversionDay = $firstConversionDay;
        $this->defaultConversionDay = $defaultConversionDay;
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
}
