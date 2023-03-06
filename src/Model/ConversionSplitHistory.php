<?php

namespace CurrencyCloud\Model;

class ConversionSplitHistory
{
    private Conversion $parentConversion;
    private Conversion $originConversion;
    /**
     * @var Conversion[]
     */
    private array $childConversions;

    public function __construct(Conversion $parentConversion, Conversion $originConversion, array $childConversions)
    {
        $this->parentConversion = $parentConversion;
        $this->originConversion = $originConversion;
        $this->childConversions = $childConversions;
    }

    public function getParentConversion(): Conversion
    {
        return $this->parentConversion;
    }

    public function getOriginConversion(): Conversion
    {
        return $this->originConversion;
    }

    /**
     * @return Conversion[]
     */
    public function getChildConversions(): array
    {
        return $this->childConversions;
    }
}
