<?php

namespace CurrencyCloud\Model;

use DateTimeInterface;

class Transaction
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var null|string
     */
    private $balanceId;

    /**
     * @var null|string
     */
    private $accountId;

    /**
     * @var null|string
     */
    private $currency;

    /**
     * @var null|string
     */
    private $amount;

    /**
     * @var null|string
     */
    private $balanceAmount;

    /**
     * @var null|string
     */
    private $type;

    /**
     * @var null|string
     */
    private $action;

    /**
     * @var null|string
     */
    private $relatedEntityType;

    /**
     * @var null|string
     */
    private $relatedEntityId;

    /**
     * @var null|string
     */
    private $relatedEntityShortReference;

    /**
     * @var null|string
     */
    private $status;

    /**
     * @var null|string
     */
    private $reason;

    /**
     * @var DateTimeInterface|null
     */
    private $settlesAt;

    /**
     * @var DateTimeInterface|null
     */
    private $createdAt;

    /**
     * @var DateTimeInterface|null
     */
    private $updatedAt;

    /**
     * @var DateTimeInterface|null
     */
    private $completedAt;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|string
     */
    public function getBalanceId()
    {
        return $this->balanceId;
    }

    /**
     * @param null|string $balanceId
     *
     * @return $this
     */
    public function setBalanceId($balanceId)
    {
        $this->balanceId = (null === $balanceId) ? null : (string) $balanceId;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param null|string $accountId
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->accountId = (null === $accountId) ? null : (string) $accountId;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param null|string $currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->currency = (null === $currency) ? null : (string) $currency;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param null|string $amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = (null === $amount) ? null : (string) $amount;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getBalanceAmount()
    {
        return $this->balanceAmount;
    }

    /**
     * @param null|string $balanceAmount
     *
     * @return $this
     */
    public function setBalanceAmount($balanceAmount)
    {
        $this->balanceAmount = (null === $balanceAmount) ? null : (string) $balanceAmount;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param null|string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = (null === $type) ? null : (string) $type;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param null|string $action
     *
     * @return $this
     */
    public function setAction($action)
    {
        $this->action = (null === $action) ? null : (string) $action;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getRelatedEntityType()
    {
        return $this->relatedEntityType;
    }

    /**
     * @param null|string $relatedEntityType
     *
     * @return $this
     */
    public function setRelatedEntityType($relatedEntityType)
    {
        $this->relatedEntityType = (null === $relatedEntityType) ? null : (string) $relatedEntityType;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getRelatedEntityId()
    {
        return $this->relatedEntityId;
    }

    /**
     * @param null|string $relatedEntityId
     *
     * @return $this
     */
    public function setRelatedEntityId($relatedEntityId)
    {
        $this->relatedEntityId = (null === $relatedEntityId) ? null : (string) $relatedEntityId;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getRelatedEntityShortReference()
    {
        return $this->relatedEntityShortReference;
    }

    /**
     * @param null|string $relatedEntityShortReference
     *
     * @return $this
     */
    public function setRelatedEntityShortReference($relatedEntityShortReference)
    {
        $this->relatedEntityShortReference =
            (null === $relatedEntityShortReference) ? null : (string) $relatedEntityShortReference;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param null|string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = (null === $status) ? null : (string) $status;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param null|string $reason
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = (null === $reason) ? null : (string) $reason;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getSettlesAt()
    {
        return $this->settlesAt;
    }

    /**
     * @param DateTimeInterface|null $settlesAt
     *
     * @return $this
     */
    public function setSettlesAt(DateTimeInterface $settlesAt = null)
    {
        $this->settlesAt = $settlesAt;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param DateTimeInterface|null $createdAt
     *
     * @return $this
     */
    public function setCreatedAt(DateTimeInterface $createdAt = null)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param DateTimeInterface|null $updatedAt
     *
     * @return $this
     */
    public function setUpdatedAt(DateTimeInterface $updatedAt = null)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getCompletedAt()
    {
        return $this->completedAt;
    }

    /**
     * @param DateTimeInterface|null $completedAt
     *
     * @return $this
     */
    public function setCompletedAt($completedAt)
    {
        $this->completedAt = $completedAt;

        return $this;
    }
}
