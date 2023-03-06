<?php

namespace CurrencyCloud\EntryPoint;

use CurrencyCloud\Client;
use CurrencyCloud\Model\Pagination;
use GuzzleHttp\Exception\GuzzleException;
use ReflectionClass;
use stdClass;
use DateTime;

abstract class AbstractEntryPoint
{
    public function __construct(private readonly Client $client)
    {
    }

    /**
     * @throws GuzzleException|\RuntimeException|\JsonException
     */
    protected function request(string $method, string $uri, array $queryParams = [], array $requestParams = [], array $options = [], bool $secured = true): array|stdClass
    {
        return $this->client->request($method, $uri, $queryParams, $requestParams, $options, $secured);
    }

    protected function createPaginationFromResponse(stdClass $response): Pagination
    {
        $pagination = $response->pagination;

        return Pagination::create(
            $pagination->total_entries,
            $pagination->total_pages,
            $pagination->current_page,
            $pagination->per_page,
            $pagination->previous_page,
            $pagination->next_page,
            $pagination->order,
            $pagination->order_asc_desc
        );
    }

    protected function convertPaginationToRequest(Pagination $pagination): array
    {
        return [
            'page' => $pagination->getCurrentPage(),
            'per_page' => $pagination->getPerPage(),
            'order' => $pagination->getOrder(),
            'order_asc_desc' => $pagination->getOrderAscDesc()
        ];
    }

    protected function setIdProperty(object $object, mixed $value, string $propertyName = 'id'): void
    {
        $reflection = new ReflectionClass($object);
        $property = $reflection->getProperty($propertyName);
        $property->setAccessible(true);
        $property->setValue($object, $value);
    }

    protected function getDateTimeOrNullFromString(?string $value): ?DateTime
    {
        return (null !== $value) ? new DateTime($value) : null;
    }
}
