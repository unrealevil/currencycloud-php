<?php

namespace CurrencyCloud\Model;

use function strtoupper;

class Currency
{
    private string $code;
    private int $decimalPlaces;
    private string $name;
    private bool $onlineTrading;
    private bool $canBuy;
    private bool $canSell;

    public function __construct(string $code, ?int $decimalPlaces, ?string $name, ?bool $onlineTrading, ?bool $canBuy, ?bool $canSell)
    {
        $this->code = \strtoupper($code);
        $this->decimalPlaces = (int) $decimalPlaces;
        $this->name = (string) $name;
        $this->onlineTrading = (bool) $onlineTrading;
        $this->canBuy = (bool) $canBuy;
        $this->canSell = (bool) $canSell;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function getDecimalPlaces(): int
    {
        return $this->decimalPlaces;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getOnlineTrading(): bool
    {
        return $this->onlineTrading;
    }

    public function getCanBuy(): bool
    {
        return $this->canBuy;
    }

    public function getCanSell(): bool
    {
        return $this->canSell;
    }
}
