<?php

namespace CurrencyCloud\Model;

use ArrayIterator;
use Traversable;

class Contacts extends PaginatedData
{
    /**
     * @var Contact[]
     */
    private array $contacts;

    /**
     * @param Contact[] $contacts
     * @param Pagination $pagination
     */
    public function __construct(array $contacts, Pagination $pagination)
    {
        parent::__construct($pagination);
        $this->contacts = $contacts;
    }

    /**
     * @return Contact[]
     */
    public function getContacts(): array
    {
        return $this->contacts;
    }

    /**
     * @inheritdoc
     */
    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->contacts);
    }

    /**
     * @inheritdoc
     */
    public function count(): int
    {
        return count($this->contacts);
    }
}
