<?php

namespace CurrencyCloud\Criteria;

use DateTime;

class FindReportsCriteria
{
    private ?string $shortReference = null;
    private ?string $description = null;
    private ?string $accountId = null;
    private ?string $contactId = null;
    private ?DateTime $createdAtFrom = null;
    private ?DateTime $createdAtTo = null;
    private ?DateTime $expirationDateFrom = null;
    private ?DateTime $expirationDateTo = null;
    private ?string $status = null;
    private ?string $reportType = null;

    public function getShortReference(): ?string
    {
        return $this->shortReference;
    }

    public function setShortReference(?string $shortReference): self
    {
        $this->shortReference = $shortReference;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getAccountId(): ?string
    {
        return $this->accountId;
    }

    public function setAccountId(?string $accountId): self
    {
        $this->accountId = $accountId;

        return $this;
    }

    public function getContactId(): ?string
    {
        return $this->contactId;
    }

    public function setContactId(?string $contactId): self
    {
        $this->contactId = $contactId;

        return $this;
    }

    public function getCreatedAtFrom(): ?DateTime
    {
        return $this->createdAtFrom;
    }

    public function setCreatedAtFrom(?DateTime $createdAtFrom): self
    {
        $this->createdAtFrom = $createdAtFrom;

        return $this;
    }

    public function getCreatedAtTo(): ?DateTime
    {
        return $this->createdAtTo;
    }

    public function setCreatedAtTo(?DateTime $createdAtTo): self
    {
        $this->createdAtTo = $createdAtTo;

        return $this;
    }

    public function getExpirationDateFrom(): ?DateTime
    {
        return $this->expirationDateFrom;
    }

    public function setExpirationDateFrom(?DateTime $expirationDateFrom): self
    {
        $this->expirationDateFrom = $expirationDateFrom;

        return $this;
    }

    public function getExpirationDateTo(): ?DateTime
    {
        return $this->expirationDateTo;
    }

    public function setExpirationDateTo(?DateTime $expirationDateTo): self
    {
        $this->expirationDateTo = $expirationDateTo;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getReportType(): ?string
    {
        return $this->reportType;
    }

    public function setReportType(?string $reportType): self
    {
        $this->reportType = $reportType;

        return $this;
    }
}
