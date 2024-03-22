<?php
namespace CurrencyCloud\Model;

use DateTime;
use DateTimeInterface;

class Report implements EntityInterface
{
    private ?string $id = null;
    private ?string $shortReference = null;
    private ?string $description = null;
    private ?ReportSearchParams $searchParams = null;
    private ?string $reportType = null;
    private ?string $status = null;
    private ?string $failureReason = null;
    private ?DateTimeInterface $expirationDate = null;
    private ?string $reportUrl = null;
    private ?string $accountId = null;
    private ?string $contactId = null;
    private ?DateTime $createdAt = null;
    private ?DateTime $updatedAt = null;

    public function getId(): ?string
    {
        return $this->id;
    }

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

    public function getSearchParams(): ?ReportSearchParams
    {
        return $this->searchParams;
    }

    public function setSearchParams(?ReportSearchParams $searchParams): self
    {
        $this->searchParams = $searchParams;

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

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getFailureReason(): ?string
    {
        return $this->failureReason;
    }

    public function setFailureReason(?string $failureReason): self
    {
        $this->failureReason = $failureReason;

        return $this;
    }

    public function getExpirationDate(): ?DateTimeInterface
    {
        return $this->expirationDate;
    }

    public function setExpirationDate(?DateTimeInterface $expirationDate): self
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    public function getReportUrl(): ?string
    {
        return $this->reportUrl;
    }

    public function setReportUrl(?string $reportUrl): self
    {
        $this->reportUrl = $reportUrl;

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

    public function getCreatedAt(): ?DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
