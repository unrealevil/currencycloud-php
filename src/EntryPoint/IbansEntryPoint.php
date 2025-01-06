<?php

namespace CurrencyCloud\EntryPoint;

use CurrencyCloud\Criteria\FindIbansCriteria;
use CurrencyCloud\Model\Iban;
use CurrencyCloud\Model\Ibans;
use CurrencyCloud\Model\Pagination;
use DateTime;

class IbansEntryPoint extends AbstractEntityEntryPoint
{
    public function find(?FindIbansCriteria $findIbansCriteria, ?Pagination $pagination): Ibans
    {
        if (null === $findIbansCriteria) {
            $findIbansCriteria = new FindIbansCriteria();
        }
        if (null === $pagination) {
            $pagination = new Pagination();
        }

        return $this->doFind(
            'ibans/find',
            $findIbansCriteria,
            $pagination,
            function($findIbansCriteria) {
                return $this->convertIbansCriteriaToRequest($findIbansCriteria);
            },
            function($response) {
                return $this->convertResponseToIban($response);
            },
            static function(array $entities, Pagination $pagination) {
                return new Ibans($entities, $pagination);
            },
            'ibans'
        );
    }

    protected function convertIbansCriteriaToRequest(FindIbansCriteria $findIbansCriteria): array
    {
        return [
            'scope' => $findIbansCriteria->getScope(),
            'currency' => $findIbansCriteria->getCurrency(),
            'account_id' => $findIbansCriteria->getAccountId(),
        ];
    }

    protected function convertResponseToIban($response): Iban
    {
        $iban = new Iban();

        $this->setIdProperty($iban, $response->id);
        $iban->setAccountId($response->account_id);
        $iban->setIbanCode($response->iban_code);
        $iban->setCurrency($response->currency);
        $iban->setAccountHolderName($response->account_holder_name);
        $iban->setBankInstitutionName($response->bank_institution_name);
        $iban->setBankInstitutionAddress($response->bank_institution_address);
        $iban->setBankInstitutionCountry($response->bank_institution_country);
        $iban->setBicSwift($response->bic_swift);
        $iban->setCreatedAt(null !== $response->created_at ? new DateTime($response->created_at) : null);
        $iban->setUpdatedAt(null !== $response->updated_at ? new DateTime($response->updated_at) : null);

        return $iban;
    }
}
