<?php

namespace CurrencyCloud\Model;

class PayerDetails
{
    private ?string $payerEntityType;
    private ?string $paymentType;
    /**
     * @var RequiredFieldEntry[]
     */
    private ?array $requiredFields;
    private ?string $payerIdentificationType;

    /**
     * @param RequiredFieldEntry[] $requiredFields
     */
    public function __construct(?string $payerEntityType, ?string $paymentType, ?string $payerIdentificationType, ?array $requiredFields)
    {
        $this->payerEntityType = $payerEntityType;
        $this->paymentType = $paymentType;
        $this->requiredFields = $requiredFields;
        $this->payerIdentificationType = $payerIdentificationType;
    }

    public function getPayerEntityType(): ?string
    {
        return $this->payerEntityType;
    }

    public function setPayerEntityType(?string $payerEntityType): self
    {
        $this->payerEntityType = $payerEntityType;

        return $this;
    }

    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }

    public function setPaymentType(?string $paymentType): self
    {
        $this->paymentType = $paymentType;

        return $this;
    }

    /**
     * @return RequiredFieldEntry[]|null
     */
    public function getRequiredFields(): ?array
    {
        return $this->requiredFields;
    }

    public function setRequiredFields(?array $requiredFields): self
    {
        $this->requiredFields = $requiredFields;

        return $this;
    }

    public function getPayerIdentificationType(): ?string
    {
        return $this->payerIdentificationType;
    }

    public function setPayerIdentificationType(?string $payerIdentificationType): self
    {
        $this->payerIdentificationType = $payerIdentificationType;

        return $this;
    }
}
