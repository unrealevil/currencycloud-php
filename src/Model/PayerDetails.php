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

    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }

    /**
     * @return RequiredFieldEntry[]|null
     */
    public function getRequiredFields(): ?array
    {
        return $this->requiredFields;
    }

    public function getPayerIdentificationType(): ?string
    {
        return $this->payerIdentificationType;
    }
}
