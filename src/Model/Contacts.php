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

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->contacts);
    }

    public function count(): int
    {
        return \count($this->contacts);
    }
}
