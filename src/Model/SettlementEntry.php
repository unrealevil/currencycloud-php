<?php

namespace CurrencyCloud\Model;

class SettlementEntry
{
    private ?string $sendAmount;
    private ?string $receiveAmount;

    public function __construct(?string $sendAmount, ?string $receiveAmount)
    {
        $this->sendAmount = $sendAmount;
        $this->receiveAmount = $receiveAmount;
    }

    public function getSendAmount(): ?string
    {
        return $this->sendAmount;
    }

    public function getReceiveAmount(): ?string
    {
        return $this->receiveAmount;
    }
}
