<?php

namespace CurrencyCloud\Model;

class AccountVerificationResponse
{
    private ?string $answer;
    private ?string $actualName;
    private ?string $reasonCode;
    private ?string $reason;
    private ?string $reasonType;

    public function __construct(
        ?string $answer = null,
        ?string $actualName = null,
        ?string $reasonCode = null,
        ?string $reason = null,
        ?string $reasonType = null
    ) {
        $this->answer = $answer;
        $this->actualName = $actualName;
        $this->reasonCode = $reasonCode;
        $this->reason = $reason;
        $this->reasonType = $reasonType;
    }

    public function getAnswer(): ?string
    {
        return $this->answer;
    }

    public function setAnswer(string $answer): self
    {
        $this->answer = $answer;

        return $this;
    }

    public function getActualName(): ?string
    {
        return $this->actualName;
    }

    public function setActualName(string $actualName): self
    {
        $this->actualName = $actualName;

        return $this;
    }

    public function getReasonCode(): ?string
    {
        return $this->reasonCode;
    }

    public function setReasonCode(string $reasonCode): self
    {
        $this->reasonCode = $reasonCode;

        return $this;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function setReason(string $reason): self
    {
        $this->reason = $reason;

        return $this;
    }

    public function getReasonType(): ?string
    {
        return $this->reasonType;
    }

    public function setReasonType(string $reasonType): self
    {
        $this->reasonType = $reasonType;

        return $this;
    }
}
