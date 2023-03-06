<?php

namespace CurrencyCloud\Model;

use DateTime;

class InvalidPaymentDate
{
    private DateTime $date;
    private string $description;

    public function __construct(?DateTime $date, ?string $description)
    {
        $this->date = $date;
        $this->description = (string) $description;
    }

    public function getDate(): ?DateTime
    {
        return $this->date;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
