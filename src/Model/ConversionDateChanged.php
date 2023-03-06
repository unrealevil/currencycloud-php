<?php

namespace CurrencyCloud\Model;

use DateTime;

class ConversionDateChanged
{
    private ?string $conversion_id = null;
    private ?string $amount = null;
    private ?string $currency = null;
    private ?DateTime $new_conversion_date = null;
    private ?DateTime $new_settlement_date = null;
    private ?DateTime $old_conversion_date = null;
    private ?DateTime $old_settlement_date = null;
    private ?DateTime $event_date_time = null;

    public function getConversionId(): ?string
    {
        return $this->conversion_id;
    }

    public function setConversionId(?string $conversion_id): self
    {
        $this->conversion_id = $conversion_id;

        return $this;
    }

    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function setAmount(?string $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    public function getNewConversionDate(): ?DateTime
    {
        return $this->new_conversion_date;
    }

    public function setNewConversionDate(?string $new_conversion_date): self
    {
        if ($new_conversion_date) {
            $this->new_conversion_date = new DateTime($new_conversion_date);
        }

        return $this;
    }

    public function getNewSettlementDate(): ?DateTime
    {
        return $this->new_settlement_date;
    }

    public function setNewSettlementDate(?string $new_settlement_date): self
    {
        if ($new_settlement_date) {
            $this->new_settlement_date = new DateTime($new_settlement_date);
        }

        return $this;
    }

    public function getOldConversionDate(): ?DateTime
    {
        return $this->old_conversion_date;
    }

    public function setOldConversionDate(?string $old_conversion_date): self
    {
        if ($old_conversion_date) {
            $this->old_conversion_date = new DateTime($old_conversion_date);
        }

        return $this;
    }

    public function getOldSettlementDate(): ?DateTime
    {
        return $this->old_settlement_date;
    }

    public function setOldSettlementDate(?string $old_settlement_date): self
    {
        if ($old_settlement_date) {
            $this->old_settlement_date = new DateTime($old_settlement_date);
        }

        return $this;
    }

    public function getEventDateTime(): ?DateTime
    {
        return $this->event_date_time;
    }

    public function setEventDateTime(?string $event_date_time): self
    {
        if ($event_date_time) {
            $this->event_date_time = new DateTime($event_date_time);
        }

        return $this;
    }
}
