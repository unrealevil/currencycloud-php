<?php

namespace CurrencyCloud\Model;

use DateTime;

class PaymentDates
{
    /**
     * @var InvalidPaymentDate[]
     */
    private array $invalidPaymentDates;
    private ?DateTime $firstPaymentDay;

    /**
     * @param InvalidPaymentDate[] $invalidPaymentDates
     */
    public function __construct(array $invalidPaymentDates, ?DateTime $firstPaymentDay)
    {
        $this->invalidPaymentDates = $invalidPaymentDates;
        $this->firstPaymentDay = $firstPaymentDay;
    }

    /**
     * @return InvalidPaymentDate[]
     */
    public function getInvalidPaymentDates(): array
    {
        return $this->invalidPaymentDates;
    }

    public function getFirstPaymentDay(): ?DateTime
    {
        return $this->firstPaymentDay;
    }
}
