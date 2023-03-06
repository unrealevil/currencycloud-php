<?php

namespace CurrencyCloud\Model;

class AccountPaymentChargesSetting
{
    private ?string $chargeSettingsId;
    private ?string $accountId;
    private ?string $chargeType;
    private ?bool $enabled;
    private ?bool $default;

    public function __construct(?string $chargeSettingsId, ?string $accountId, ?string $chargeType, ?bool $enabled, ?bool $default)
    {
        $this->chargeSettingsId = $chargeSettingsId;
        $this->accountId = $accountId;
        $this->chargeType = $chargeType;
        $this->enabled = $enabled;
        $this->default = $default;
    }

    public function getChargeSettingsId(): ?string
    {
        return $this->chargeSettingsId;
    }

    public function getAccountId(): ?string
    {
        return $this->accountId;
    }

    public function getChargeType(): ?string
    {
        return $this->chargeType;
    }

    public function isEnabled(): ?bool
    {
        return $this->enabled;
    }

    public function isDefault(): ?bool
    {
        return $this->default;
    }
}
