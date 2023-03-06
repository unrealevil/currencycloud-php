<?php

namespace CurrencyCloud\EntryPoint;

use CurrencyCloud\Client;
use CurrencyCloud\Model\EntityInterface;
use CurrencyCloud\Model\PaginatedData;
use CurrencyCloud\Model\Pagination;
use CurrencyCloud\SimpleEntityManager;

abstract class AbstractEntityEntryPoint extends AbstractEntryPoint
{
    protected SimpleEntityManager $entityManager;

    public function __construct(SimpleEntityManager $entityManager, Client $client)
    {
        parent::__construct($client);
        $this->entityManager = $entityManager;
    }

    protected function doCreate(string $entryPoint, mixed $data, callable $converterToRequest, callable $converterFromResponse, string $onBehalfOf = null): EntityInterface
    {

        $response = $this->request(
            'POST',
            $entryPoint,
            [],
            $converterToRequest($data) + [
                'on_behalf_of' => $onBehalfOf
            ]
        );
        $data = $converterFromResponse($response);
        $this->entityManager->add($data);
        return $data;
    }

    protected function doDelete(string $entryPoint, EntityInterface $entity, callable $converterFromResponse, string $onBehalfOf = null): EntityInterface
    {
        $response = $this->request(
            'POST',
            $entryPoint,
            [],
            [
                'on_behalf_of' => $onBehalfOf
            ]
        );
        $this->entityManager->remove($entity);
        return $converterFromResponse($response);
    }

    protected function doRetrieve(string $entryPoint, callable $converterFromResponse, string $onBehalfOf = null): EntityInterface
    {
        $response = $this->request(
            'GET',
            $entryPoint,
            [
                'on_behalf_of' => $onBehalfOf
            ]
        );
        $entity = $converterFromResponse($response);

        $this->entityManager->add($entity);

        return $entity;
    }

    protected function doFind(
        string $entryPoint,
        mixed $searchModel,
        Pagination $pagination,
        callable $converterToRequest,
        callable $converterFromResponse,
        callable $collectionConverter,
        string $property,
        string $onBehalfOf = null
    ): PaginatedData
    {

        $response = $this->request(
            'GET',
            $entryPoint,
            $converterToRequest($searchModel, $onBehalfOf) + $this->convertPaginationToRequest(
                $pagination
            )
        );
        $beneficiaries = [];
        foreach ($response->$property as $model) {
            $entity = $converterFromResponse($model);
            $this->entityManager->add($entity);
            $beneficiaries[] = $entity;
        }
        return $collectionConverter($beneficiaries, $this->createPaginationFromResponse($response));
    }

    protected function doUpdate(
        string $entryPoint,
        EntityInterface $entity,
        callable $converterToRequest,
        callable $converterFromResponse,
        string $onBehalfOf = null
    ): EntityInterface
    {
        $changeSet = $this->entityManager->computeChangeSet($entity);
        if (null === $changeSet) {
            return $entity;
        }
        $response = $this->request(
            'POST',
            $entryPoint,
            [],
            $converterToRequest($changeSet, $onBehalfOf)
        );
        $newEntity = $converterFromResponse($response);

        $this->entityManager->remove($entity);
        $this->entityManager->add($newEntity);

        return $newEntity;
    }
}
