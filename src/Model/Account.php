<?php

namespace CurrencyCloud\Model;

use DateTime;

class Account implements EntityInterface
{
    private ?string $id = null;
    private ?string $legalEntityType = null;
    private ?string $accountName = null;
    private ?string $brand = null;
    private ?string $yourReference = null;
    private ?string $status = null;
    private ?string $street = null;
    private ?string $city = null;
    private ?string $stateOrProvince = null;
    private ?string $country = null;
    private ?string $postalCode = null;
    private ?string $spreadTable = null;
    private ?DateTime $createdAt = null;
    private ?DateTime $updatedAt = null;
    private ?string $identificationType = null;
    private ?string $identificationValue = null;
    private ?string $shortReference = null;
    private ?bool $termsAndConditionsAccepted = null;
    private ?bool $apiTrading = null;
    private ?bool $onlineTrading = null;
    private ?bool $phoneTrading = null;

    public static function create(?string $accountName, string $legalEntityType): Account
    {
        return (new self())->setAccountName($accountName)
            ->setLegalEntityType($legalEntityType);
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getLegalEntityType(): ?string
    {
        return $this->legalEntityType;
    }

    public function setLegalEntityType(?string $legalEntityType): self
    {
        $this->legalEntityType = $legalEntityType;

        return $this;
    }

    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    public function setAccountName(?string $accountName): self
    {
        $this->accountName = $accountName;

        return $this;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(?string $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    public function getYourReference(): ?string
    {
        return $this->yourReference;
    }

    public function setYourReference(?string $yourReference): self
    {
        $this->yourReference = $yourReference;

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

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(?string $street): self
    {
        $this->street = $street;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getStateOrProvince(): ?string
    {
        return $this->stateOrProvince;
    }

    public function setStateOrProvince(?string $stateOrProvince): self
    {
        $this->stateOrProvince = $stateOrProvince;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function setPostalCode(?string $postalCode): self
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    public function getSpreadTable(): ?string
    {
        return $this->spreadTable;
    }

    public function setSpreadTable(?string $spreadTable): self
    {
        $this->spreadTable = $spreadTable;

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

    public function getIdentificationType(): ?string
    {
        return $this->identificationType;
    }

    public function setIdentificationType(?string $identificationType): self
    {
        $this->identificationType = $identificationType;

        return $this;
    }

    public function getIdentificationValue(): ?string
    {
        return $this->identificationValue;
    }

    public function setIdentificationValue(?string $identificationValue): self
    {
        $this->identificationValue = $identificationValue;

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

    public function isTermsAndConditionsAccepted(): ?bool
    {
        return $this->termsAndConditionsAccepted;
    }

    public function setTermsAndConditionsAccepted(?bool $termsAndConditionsAccepted): self
    {
        $this->termsAndConditionsAccepted = $termsAndConditionsAccepted;

        return $this;
    }

    public function isApiTrading(): ?bool
    {
        return $this->apiTrading;
    }

    public function setApiTrading(?bool $apiTrading): self
    {
        $this->apiTrading = $apiTrading;

        return $this;
    }

    public function isOnlineTrading(): ?bool
    {
        return $this->onlineTrading;
    }

    public function setOnlineTrading(?bool $onlineTrading): self
    {
        $this->onlineTrading = $onlineTrading;

        return $this;
    }

    public function isPhoneTrading(): ?bool
    {
        return $this->phoneTrading;
    }

    public function setPhoneTrading(?bool $phoneTrading): self
    {
        $this->phoneTrading = $phoneTrading;

        return $this;
    }
}
