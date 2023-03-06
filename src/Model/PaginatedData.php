<?php

namespace CurrencyCloud\Model;

use Countable;
use IteratorAggregate;

abstract class PaginatedData implements Countable, IteratorAggregate
{
    private ?Pagination $pagination;

    public function __construct(?Pagination $pagination)
    {
        $this->pagination = $pagination;
    }

    public function getPagination(): ?Pagination
    {
        return $this->pagination;
    }
}
