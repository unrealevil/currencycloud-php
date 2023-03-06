<?php

namespace CurrencyCloud\Model;

use DateTime;

class CancelledConversion
{
    private ?string $account_id = null;
    private ?string $contact_id = null;
    private ?string $event_account_id = null;
    private ?string $event_contact_id = null;
    private ?string $conversion_id = null;
    private ?string $event_type = null;
    private ?string $amount = null;
    private ?string $currency = null;
    private ?string $notes = null;
    private ?DateTime $event_date_time = null;

    public function getAccountId(): ?string
    {
        return $this->account_id;
    }

    public function setAccountId(?string $account_id): self
    {
        $this->account_id = $account_id;

        return $this;
    }

    public function getContactId(): ?string
    {
        return $this->contact_id;
    }

    public function setContactId(?string $contact_id): self
    {
        $this->contact_id = $contact_id;

        return $this;
    }

    public function getEventAccountId(): ?string
    {
        return $this->event_account_id;
    }

    public function setEventAccountId(?string $event_account_id): self
    {
        $this->event_account_id = $event_account_id;

        return $this;
    }

    public function getEventContactId(): ?string
    {
        return $this->event_contact_id;
    }

    public function setEventContactId(?string $event_contact_id): self
    {
        $this->event_contact_id = $event_contact_id;

        return $this;
    }

    public function getConversionId(): ?string
    {
        return $this->conversion_id;
    }

    public function setConversionId(?string $conversion_id): self
    {
        $this->conversion_id = $conversion_id;

        return $this;
    }

    public function getEventType(): ?string
    {
        return $this->event_type;
    }

    public function setEventType(?string $event_type): self
    {
        $this->event_type = $event_type;

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

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): self
    {
        $this->notes = $notes;

        return $this;
    }

    public function getEventDateTime(): ?DateTime
    {
        return $this->event_date_time;
    }

    public function setEventDateTime(?DateTime $event_date_time): self
    {
        $this->event_date_time = $event_date_time;

        return $this;
    }
}
