<?php

namespace CurrencyCloud;

use CurrencyCloud\Model\EntityInterface;
use DateTime;
use ReflectionObject;
use ReflectionProperty;
use RuntimeException;
use SplObjectStorage;

class SimpleEntityManager
{
    private SplObjectStorage $storage;

    public function __construct()
    {
        $this->storage = new SplObjectStorage();
    }

    public function add(EntityInterface $object): static
    {
        $this->storage->attach($object, $this->loadObjectsPropertyValues($object));

        return $this;
    }

    public function remove(EntityInterface $object): static
    {
        $this->storage->detach($object);

        return $this;
    }

    public function computeChangeSet(EntityInterface $object): EntityInterface|null
    {
        if (!$this->storage->contains($object)) {
            throw new RuntimeException('Entity is not managed by entity manager and therefore can not be updated');
        }
        $properties = $this->storage->offsetGet($object);
        $currentProperties = $this->loadObjectsPropertyValues($object);

        $changeSet = [];

        //We assume that properties have not changed
        foreach ($properties as $property => $value) {
            $otherSide = $currentProperties[$property];
            if (
                null !== $otherSide
                &&
                null !== $value
            ) {
                //on purpose !== is not used
                if ($otherSide != $value) {
                    $changeSet[$property] = $otherSide;
                }
            } elseif ($otherSide !== $value) {
                $changeSet[$property] = $otherSide;
            }
        }

        $clone = clone $object;

        $reflectionProperties = $this->getObjectsProperties($object);

        $hasOneSet = false;
        foreach ($reflectionProperties as $property) {
            if (isset($changeSet[$property->getName()])) {
                $property->setValue($clone, $changeSet[$property->getName()]);
                $hasOneSet = true;
            } else {
                $property->setValue($clone, null);
            }
        }

        if (!$hasOneSet) {
            return null;
        }

        return $clone;
    }

    protected function loadObjectsPropertyValues(EntityInterface $object): array
    {
        $ret = [];

        foreach ($this->getObjectsProperties($object) as $property) {
            $value = $property->getValue($object);
            if ($value instanceof DateTime) {
                $value = clone $value;
            }
            $ret[$property->getName()] = $value;
        }

        return $ret;
    }

    /**
     * @return ReflectionProperty[]
     */
    protected function getObjectsProperties(EntityInterface $object): array
    {
        $reflectionObject = new ReflectionObject($object);
        $currentProperties = $reflectionObject->getProperties();

        return array_map(static function(ReflectionProperty $property) {
            $property->setAccessible(true);

            return $property;
        }, $currentProperties);
    }
}
