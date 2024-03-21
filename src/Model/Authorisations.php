<?php

namespace CurrencyCloud\Model;

use ArrayIterator;
use Countable;
use IteratorAggregate;
use Traversable;

class Authorisations implements IteratorAggregate, Countable
{
    /**
     * @var Authorisation[]
     */
    private array $authorisations;

    /**
     * @param Authorisation[] $authorisations
     */
    public function __construct(array $authorisations)
    {
        $this->authorisations = $authorisations;
    }

    /**
     * @return Authorisation[]
     */
    public function getAuthorisations(): array
    {
        return $this->authorisations;
    }

    /**
     * @inheritdoc
     */
    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->authorisations);
    }

    /**
     * @inheritdoc
     */
    public function count(): int
    {
        return count($this->authorisations);
    }
}
