<?php

namespace CurrencyCloud\Model;

use DateTime;

class Contact implements EntityInterface
{
    private ?string $id = null;
    private ?string $loginId = null;
    private ?string $yourReference = null;
    private ?string $firstName = null;
    private ?string $lastName = null;
    private ?string $accountId = null;
    private ?string $accountName = null;
    private ?string $status = null;
    private ?string $phoneNumber = null;
    private ?string $mobilePhoneNumber = null;
    private ?string $locale = null;
    private ?string $timezone = null;
    private ?string $emailAddress = null;
    private ?DateTime $dateOfBirth = null;
    private ?DateTime $createdAt = null;
    private ?DateTime $updatedAt = null;

    public static function create(string $accountId, ?string $firstName, ?string $lastName, ?string $emailAddress, ?string $phoneNumber): Contact
    {
        return (new self())
            ->setAccountId($accountId)
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setEmailAddress($emailAddress)
            ->setPhoneNumber($phoneNumber);
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getLoginId(): ?string
    {
        return $this->loginId;
    }

    public function setLoginId(?string $loginId): self
    {
        $this->loginId = $loginId;

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

    public function getAccountId(): ?string
    {
        return $this->accountId;
    }

    public function setAccountId(?string $accountId): self
    {
        $this->accountId = $accountId;

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

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(?string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    public function getMobilePhoneNumber(): ?string
    {
        return $this->mobilePhoneNumber;
    }

    public function setMobilePhoneNumber(?string $mobilePhoneNumber): self
    {
        $this->mobilePhoneNumber = $mobilePhoneNumber;

        return $this;
    }

    public function getLocale(): ?string
    {
        return $this->locale;
    }

    public function setLocale(?string $locale): self
    {
        $this->locale = $locale;

        return $this;
    }

    public function getTimezone(): ?string
    {
        return $this->timezone;
    }

    public function setTimezone(?string $timezone): self
    {
        $this->timezone = $timezone;

        return $this;
    }

    public function getEmailAddress(): ?string
    {
        return $this->emailAddress;
    }

    public function setEmailAddress(?string $emailAddress): self
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    public function getDateOfBirth(): ?DateTime
    {
        return $this->dateOfBirth;
    }

    public function setDateOfBirth(?DateTime $dateOfBirth): self
    {
        $this->dateOfBirth = $dateOfBirth;

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
}
