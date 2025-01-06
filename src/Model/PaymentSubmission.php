<?php

namespace CurrencyCloud\Model;

class PaymentSubmission
{
    private ?string $status;
    private ?string $mt103;
    private ?string $submission_ref;

    public function __construct(?string $status, ?string $mt103, ?string $submission_ref)
    {
        $this->status = $status;
        $this->mt103 = $mt103;
        $this->submission_ref = $submission_ref;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function getMt103(): ?string
    {
        return $this->mt103;
    }

    public function getSubmissionRef(): ?string
    {
        return $this->submission_ref;
    }
}
