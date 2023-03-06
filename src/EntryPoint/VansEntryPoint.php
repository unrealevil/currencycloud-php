<?php

namespace CurrencyCloud\EntryPoint;

use CurrencyCloud\Model\Pagination;
use CurrencyCloud\Model\VanCollection;
use CurrencyCloud\Model\Van;
use DateTime;
use stdClass;

class VansEntryPoint extends AbstractEntityEntryPoint
{
    public function retrieveVans(?Pagination $pagination): VanCollection
    {
        if (null === $pagination) {
            $pagination = new Pagination();
        }

        $response = $this->request('GET', 'virtual_accounts', $this->convertPaginationToRequest($pagination));

        return $this->createVanCollectionFromResponse($response);
    }

    protected function createVanCollectionFromResponse(stdClass $response): VanCollection
    {
        return new VanCollection(
            $this->createVanObjectArrayFromResponse($response),
            $this->createPaginationFromResponse($response)
        );
    }

    protected function createVanObjectArrayFromResponse(stdClass $response): array
    {
        $vans = [];
        if (empty($response->virtual_accounts)) {
            return $vans;
        }
        foreach ($response->virtual_accounts as $value) {
            $vans[] = new VAN(
                $value->id,
                $value->account_id,
                $value->virtual_account_number,
                $value->account_holder_name,
                $value->bank_institution_name,
                $value->bank_institution_address,
                $value->bank_institution_country,
                $value->routing_code,
                !empty($value->created_at) ? new DateTime($value->created_at) : null,
                !empty($value->updated_at) ? new DateTime($value->updated_at) : null
            );
        }

        return $vans;
    }

    public function find(?Pagination $pagination, string $scope = null, string $accountId = null): VanCollection
    {
        if (null === $pagination) {
            $pagination = new Pagination();
        }
        $response = $this->request(
            'GET',
            'virtual_accounts/find',
            array_merge(
                [
                    'scope' => $scope,
                    'account_id' => $accountId,
                ],
                $this->convertPaginationToRequest($pagination)
            )
        );

        return $this->createVanCollectionFromResponse($response);
    }
}
