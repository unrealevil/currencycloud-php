<?php

namespace CurrencyCloud\Criteria;

use DateTime;

class FindTransferCriteria
{
    private ?string $onBehalfOf = null;
    private ?string $shortReference = null;
    private ?string $sourceAccountId = null;
    private ?string $destinationAccountId = null;
    private ?string $status = null;
    private ?string $currency = null;
    private ?string $amountFrom = null;
    private ?string $amountTo = null;
    private ?DateTime $createdAtFrom = null;
    private ?DateTime $createdAtTo = null;
    private ?DateTime $updatedAtFrom = null;
    private ?DateTime $updatedAtTo = null;
    private ?DateTime $completedAtFrom = null;
    private ?DateTime $completedAtTo = null;
    private ?string $creatorContactId = null;
    private ?string $creatorAccountId = null;
    private ?string $uniqueRequestId = null;

    public function getOnBehalfOf(): ?string
    {
        return $this->onBehalfOf;
    }

    public function setOnBehalfOf(?string $onBehalfOf): self
    {
        $this->onBehalfOf = $onBehalfOf;

        return $this;
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

    public function getSourceAccountId(): ?string
    {
        return $this->sourceAccountId;
    }

    public function setSourceAccountId(?string $sourceAccountId): self
    {
        $this->sourceAccountId = $sourceAccountId;

        return $this;
    }

    public function getDestinationAccountId(): ?string
    {
        return $this->destinationAccountId;
    }

    public function setDestinationAccountId(?string $destinationAccountId): self
    {
        $this->destinationAccountId = $destinationAccountId;

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

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    public function getAmountFrom(): ?string
    {
        return $this->amountFrom;
    }

    public function setAmountFrom(?string $amountFrom): self
    {
        $this->amountFrom = $amountFrom;

        return $this;
    }

    public function getAmountTo(): ?string
    {
        return $this->amountTo;
    }

    public function setAmountTo(?string $amountTo): self
    {
        $this->amountTo = $amountTo;

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

    public function getUpdatedAtFrom(): ?DateTime
    {
        return $this->updatedAtFrom;
    }

    public function setUpdatedAtFrom(?DateTime $updatedAtFrom): self
    {
        $this->updatedAtFrom = $updatedAtFrom;

        return $this;
    }

    public function getUpdatedAtTo(): ?DateTime
    {
        return $this->updatedAtTo;
    }

    public function setUpdatedAtTo(?DateTime $updatedAtTo): self
    {
        $this->updatedAtTo = $updatedAtTo;

        return $this;
    }

    public function getCompletedAtFrom(): ?DateTime
    {
        return $this->completedAtFrom;
    }

    public function setCompletedAtFrom(?DateTime $completedAtFrom): self
    {
        $this->completedAtFrom = $completedAtFrom;

        return $this;
    }

    public function getCompletedAtTo(): ?DateTime
    {
        return $this->completedAtTo;
    }

    public function setCompletedAtTo(?DateTime $completedAtTo): self
    {
        $this->completedAtTo = $completedAtTo;

        return $this;
    }

    public function getCreatorContactId(): ?string
    {
        return $this->creatorContactId;
    }

    public function setCreatorContactId(?string $creatorContactId): self
    {
        $this->creatorContactId = $creatorContactId;

        return $this;
    }

    public function getCreatorAccountId(): ?string
    {
        return $this->creatorAccountId;
    }

    public function setCreatorAccountId(?string $creatorAccountId): self
    {
        $this->creatorAccountId = $creatorAccountId;

        return $this;
    }

    public function getUniqueRequestId(): ?string
    {
        return $this->uniqueRequestId;
    }

    public function setUniqueRequestId(?string $uniqueRequestId): self
    {
        $this->uniqueRequestId = $uniqueRequestId;

        return $this;
    }
}
