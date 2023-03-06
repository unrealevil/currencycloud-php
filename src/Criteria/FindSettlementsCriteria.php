<?php

namespace CurrencyCloud\Criteria;

use DateTime;

class FindSettlementsCriteria
{
    private ?DateTime $createdAtFrom = null;
    private ?DateTime $createdAtTo = null;
    private ?DateTime $updatedAtFrom = null;
    private ?DateTime $updatedAtTo = null;
    private ?DateTime $releasedAtFrom = null;
    private ?DateTime $releasedAtTo = null;

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

    public function getReleasedAtFrom(): ?DateTime
    {
        return $this->releasedAtFrom;
    }

    public function setReleasedAtFrom(?DateTime $releasedAtFrom): self
    {
        $this->releasedAtFrom = $releasedAtFrom;

        return $this;
    }

    public function getReleasedAtTo(): ?DateTime
    {
        return $this->releasedAtTo;
    }

    public function setReleasedAtTo(?DateTime $releasedAtTo): self
    {
        $this->releasedAtTo = $releasedAtTo;

        return $this;
    }
}
