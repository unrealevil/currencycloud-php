<?php

namespace CurrencyCloud\Model;

use DateTimeInterface;

class Balance
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $accountId;

    /**
     * @var string
     */
    private $currency;

    /**
     * @var string
     */
    private $amount;

    /**
     * @var DateTimeInterface
     */
    private $createdAt;

    /**
     * @var DateTimeInterface
     */
    private $updatedAt;

    /**
     * @param string            $accountId
     * @param string            $currency
     * @param string            $amount
     * @param DateTimeInterface $createdAt
     * @param DateTimeInterface $updatedAt
     */
    public function __construct($accountId, $currency, $amount, DateTimeInterface $createdAt, DateTimeInterface $updatedAt)
    {
        $this->accountId = (string) $accountId;
        $this->currency = (string) $currency;
        $this->amount = (string) $amount;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return DateTimeInterface
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return DateTimeInterface
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}
