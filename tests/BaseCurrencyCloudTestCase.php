<?php

namespace CurrencyCloud\Tests;

use CurrencyCloud\Client;
use CurrencyCloud\SimpleEntityManager;
use DateTime;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

class BaseCurrencyCloudTestCase extends TestCase
{
    protected function getMockedClient(mixed $returns, string $method, string $path, array $query = [], array $request = [], array $options = [], bool $secured = true): Client
    {
        $mock = $this->getMockBuilder(Client::class)
            ->disableOriginalConstructor()
            ->getMock();

        $mock->expects($this->once())->method('request')
            ->with($method, $path, $query, $request, $options, $secured)
            ->willReturn($returns);

        return $mock;
    }

    protected function getMockedEntityManager($expectedModel, $changeSet): SimpleEntityManager
    {
        $mock = $this->getMockBuilder(SimpleEntityManager::class)
            ->getMock();

        $mock->expects($this->once())->method('computeChangeSet')
            ->with($expectedModel)
            ->willReturn($changeSet);

        return $mock;
    }

    protected function validateObjectStrictName($object, $dummy): void
    {
        $this->assertIsObject($object);
        foreach ($dummy as $key => $original) {
            $parts = explode('_', $key);
            $uCased = implode('', array_map('ucfirst', $parts));
            $getter = sprintf('get%s', $uCased);
            if (!is_callable([$object, $getter])) {
                $getter = sprintf('is%s', $uCased);
                if (!is_callable([$object, $getter])) {
                    $this->fail(
                        sprintf('Found property "%s" but not method "(is|get)%s". Is it wrongly named?', $key, $uCased)
                    );
                }
            }
            $value = $object->$getter();
            if ($value instanceof DateTime) {
                $value = $value->getTimestamp();
                $original = (new DateTime($original))->getTimestamp();
            } elseif (is_bool($value)) {
                if (!is_bool($original)) {
                    $value = $value ? 'true' : 'false';
                }
            }
            $this->assertEquals($original, $value, sprintf('Property "%s" with method "%s"', $key, $getter));
            unset($dummy[$key]);
        }
        $this->assertCount(0, $dummy);
    }

    protected function getDummyPagination(): array
    {
        return [
            'total_entries' => 1,
            'total_pages' => 1,
            'current_page' => 1,
            'per_page' => 25,
            'previous_page' => -1,
            'next_page' => 2,
            'order' => 'created_at',
            'order_asc_desc' => 'asc',
        ];
    }

    protected function getDummyPaginationRequest(): array
    {
        return [
            'page' => null,
            'per_page' => null,
            'order' => null,
            'order_asc_desc' => null,
        ];
    }

    protected function setIdProperty(object $object, mixed $value, string $propertyName = 'id'): void
    {
        $reflection = new ReflectionClass($object);
        $property = $reflection->getProperty($propertyName);
        $property->setAccessible(true);
        $property->setValue($object, $value);
    }
}
