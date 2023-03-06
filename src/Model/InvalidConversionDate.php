<?php

namespace CurrencyCloud\Model;

use DateTime;

class InvalidConversionDate
{
    private ?DateTime $date;
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

    public function setDate(?DateTime $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
