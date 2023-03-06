<?php

namespace CurrencyCloud\Model;

class ConversionSplit
{
    private Conversion $parent_conversion;
    private Conversion $child_conversion;

    public function getParentConversion(): Conversion
    {
        return $this->parent_conversion;
    }

    public function setParentConversion(Conversion $parent_conversion): static
    {
        $this->parent_conversion = $parent_conversion;

        return $this;
    }

    public function getChildConversion(): Conversion
    {
        return $this->child_conversion;
    }

    public function setChildConversion(Conversion $child_conversion): static
    {
        $this->child_conversion = $child_conversion;

        return $this;
    }
}
