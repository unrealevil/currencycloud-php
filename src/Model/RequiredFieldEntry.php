<?php

namespace CurrencyCloud\Model;

class RequiredFieldEntry
{
    private ?string $name;
    private ?string $validationRule;

    public function __construct(?string $name, ?string $validationRule)
    {
        $this->name = $name;
        $this->validationRule = $validationRule;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getValidationRule(): ?string
    {
        return $this->validationRule;
    }
}
