<?php
namespace CurrencyCloud\Model;

class PaymentSubmissionInfo
{
    private ?string $status;
    private ?string $message;
    private ?string $format;
    private ?string $submission_ref;

    public function __construct(?string $status, ?string $message, ?string $format, ?string $submission_ref)
    {
        $this->status = $status;
        $this->message = $message;
        $this->format = $format;
        $this->submission_ref = $submission_ref;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function getSubmissionRef(): ?string
    {
        return $this->submission_ref;
    }
}
