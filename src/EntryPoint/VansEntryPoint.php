<?php
namespace CurrencyCloud\EntryPoint;

use CurrencyCloud\EntryPoint\AbstractEntityEntryPoint;
use CurrencyCloud\Model\Pagination;
use CurrencyCloud\Model\VanCollection;
use CurrencyCloud\Model\Van;
use DateTime;
use stdClass;

class VansEntryPoint extends AbstractEntityEntryPoint {

    /**
     * @param Pagination $pagination
     * @return VanCollection
     */
    public function retrieveVans($pagination){
        if(empty($pagination)){
            $pagination = new Pagination();
        }

        $response = $this->request('GET', 'virtual_accounts', $this->convertPaginationToRequest($pagination));

        return $this->createVanCollectionFromResponse($response);
    }

    /**
     * @param stdClass $response
     * @return VanCollection
     */
    protected function createVanCollectionFromResponse($response){
        return new VanCollection(
            $this->createVanObjectArrayFromResponse($response),
            $this->createPaginationFromResponse($response)
        );
    }

    /**
     * @param stdClass $response
     * @return array
     */
    protected function createVanObjectArrayFromResponse($response){
        $vans = [];
        if(empty($response->virtual_accounts)){
            return $vans;
        }
        foreach ($response->virtual_accounts as $key => $value) {
            array_push($vans, new VAN(
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
            ));
        }

        return $vans;
    }

    /**
     * @param Pagination $pagination
     * @param string $scope
     * @param string $accountId
     */
    public function find($pagination, $scope = null, $accountId = null){
        if(empty($pagination)){
            $pagination = new Pagination();
        }
        $response = $this->request(
            'GET',
            'virtual_accounts/find',
            array_merge(
                [
                    'scope' => $scope,
                    'account_id' => $accountId
                ],
                $this->convertPaginationToRequest($pagination)
            )
        );

        return $this->createVanCollectionFromResponse($response);
    }
}