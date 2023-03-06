<?php

namespace CurrencyCloud\Model;

use DateTime;

class Settlement implements EntityInterface
{
    private ?string $id = null;
    private ?string $shortReference = null;
    private ?string $type = null;
    private ?string $status = null;
    private ?array $conversionIds = null;
    /**
     * @var SettlementEntry[]
     */
    private ?array $entries = null;
    private ?DateTime $createdAt = null;
    private ?DateTime $updatedAt = null;
    private ?DateTime $releasedAt = null;

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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

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

    public function getConversionIds(): ?array
    {
        return $this->conversionIds;
    }

    public function setConversionIds(?array $conversionIds): self
    {
        $this->conversionIds = $conversionIds;

        return $this;
    }

    public function getEntries(): ?array
    {
        return $this->entries;
    }

    public function setEntries(?array $entries): self
    {
        $this->entries = $entries;

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

    public function getReleasedAt(): ?DateTime
    {
        return $this->releasedAt;
    }

    public function setReleasedAt(?DateTime $releasedAt): self
    {
        $this->releasedAt = $releasedAt;

        return $this;
    }
}
