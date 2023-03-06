<?php

namespace CurrencyCloud\Model;

use DateTimeInterface;

class Payer
{
    private ?string $id = null;
    private ?string $legalEntityType;
    private ?string $companyName;
    private ?string $firstName;
    private ?string $lastName;
    private ?array $address;
    private ?string $city;
    private ?string $stateOrProvince;
    private ?string $country;
    private ?string $identificationType;
    private ?string $identificationValue;
    private ?string $postcode;
    private ?DateTimeInterface $dateOfBirth;
    private ?DateTimeInterface $createdAt;
    private ?DateTimeInterface $updatedAt;

    public function __construct(
        string $legalEntityType = null,
        string $companyName = null,
        string $firstName = null,
        string $lastName = null,
        array $address = null,
        string $city = null,
        string $stateOrProvince = null,
        string $country = null,
        string $identificationType = null,
        string $identificationValue = null,
        string $postcode = null,
        DateTimeInterface $dateOfBirth = null,
        DateTimeInterface $createdAt = null,
        DateTimeInterface $updatedAt = null
    )
    {
        $this->legalEntityType = $legalEntityType;
        $this->companyName = $companyName;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->address = $address;
        $this->city = $city;
        $this->stateOrProvince = $stateOrProvince;
        $this->country = $country;
        $this->identificationType = $identificationType;
        $this->identificationValue = $identificationValue;
        $this->postcode = $postcode;
        $this->dateOfBirth = $dateOfBirth;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
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

    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    public function setCompanyName(?string $companyName): self
    {
        $this->companyName = $companyName;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getAddress(): ?array
    {
        return $this->address;
    }

    public function setAddress(?array $address): self
    {
        $this->address = $address;

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

    public function getPostcode(): ?string
    {
        return $this->postcode;
    }

    public function setPostcode(?string $postcode): self
    {
        $this->postcode = $postcode;

        return $this;
    }

    public function getDateOfBirth(): ?DateTimeInterface
    {
        return $this->dateOfBirth;
    }

    public function setDateOfBirth(?DateTimeInterface $dateOfBirth): self
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    public function getCreatedAt(): ?DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
