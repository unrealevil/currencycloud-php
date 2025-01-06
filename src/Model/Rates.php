<?php

namespace CurrencyCloud\Model;

use OutOfBoundsException;

class Rates
{
    /**
     * @var Rate[]
     */
    private array $rates;
    private array $unavailable;

    /**
     * @param Rate[] $rates
     */
    public function __construct(array $rates, array $unavailable = [])
    {
        $this->rates = $rates;
        //For faster search
        $this->unavailable = \array_combine($unavailable, $unavailable);
    }

    /**
     * @return Rate[]
     */
    public function getRates(): array
    {
        return $this->rates;
    }

    public function getUnavailable(): array
    {
        return $this->unavailable;
    }

    public function isRateUnavailable(string $pair): bool
    {
        return isset($this->unavailable[$pair]);
    }

    public function getRate(string $pair): Rate
    {
        if (!$this->isAvailable($pair)) {
            throw new OutOfBoundsException(\sprintf('Pair "%s" not found', $pair));
        }
        return $this->rates[$pair];
    }

    public function isAvailable(string $pair): bool
    {
        return isset($this->rates[$pair]);
    }
}
