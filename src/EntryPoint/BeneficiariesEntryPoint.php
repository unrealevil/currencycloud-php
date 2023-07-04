<?php

namespace CurrencyCloud\EntryPoint;

use CurrencyCloud\Model\Beneficiaries;
use CurrencyCloud\Model\Beneficiary;
use CurrencyCloud\Model\Pagination;
use DateTime;
use stdClass;

class BeneficiariesEntryPoint extends AbstractEntityEntryPoint
{
    public function validate(Beneficiary $beneficiary, string $onBehalfOf = null): Beneficiary
    {
        $response = $this->request(
            'POST',
            'beneficiaries/validate',
            [],
            $this->convertBeneficiaryToRequest(
                $beneficiary,
                true,
                $onBehalfOf
            )
        );

        return $this->createBeneficiaryFromResponse($response, true);
    }

    public function create(Beneficiary $beneficiary, string $onBehalfOf = null): Beneficiary
    {
        return $this->doCreate(
            'beneficiaries/create',
            $beneficiary,
            function ($beneficiary) {
                return $this->convertBeneficiaryToRequest($beneficiary);
            },
            function ($response) {
                return $this->createBeneficiaryFromResponse($response);
            },
            $onBehalfOf
        );
    }

    public function retrieve(string $id, string $onBehalfOf = null): Beneficiary
    {
        return $this->doRetrieve(
            \sprintf('beneficiaries/%s', $id),
            function ($response) {
                return $this->createBeneficiaryFromResponse($response);
            },
            $onBehalfOf
        );
    }

    public function update(Beneficiary $beneficiary, string $onBehalfOf = null): Beneficiary
    {
        return $this->doUpdate(
            \sprintf(
                'beneficiaries/%s',
                $beneficiary->getId()
            ),
            $beneficiary,
            function ($entity) {
                return $this->convertBeneficiaryToRequest($entity, false, true);
            },
            function ($response) {
                return $this->createBeneficiaryFromResponse($response);
            },
            $onBehalfOf
        );
    }

    public function find(Beneficiary $beneficiary = null, Pagination $pagination = null, string $onBehalfOf = null): Beneficiaries
    {
        if (null === $beneficiary) {
            $beneficiary = new Beneficiary();
        }
        if (null === $pagination) {
            $pagination = new Pagination();
        }

        return $this->doFindWithPost(
            'beneficiaries/find',
            $beneficiary,
            $pagination,
            function ($entity) {
                return $this->convertBeneficiaryToRequest($entity);
            },
            function ($response) {
                return $this->createBeneficiaryFromResponse($response);
            },
            function (array $entities, Pagination $pagination) {
                return new Beneficiaries($entities, $pagination);
            },
            'beneficiaries',
            $onBehalfOf
        );
    }

    public function delete(Beneficiary $beneficiary, string $onBehalfOf = null): Beneficiary
    {
        return $this->doDelete(
            \sprintf('beneficiaries/%s/delete', $beneficiary->getId()),
            $beneficiary,
            function ($response) {
                return $this->createBeneficiaryFromResponse($response);
            },
            $onBehalfOf
        );
    }

    protected function convertBeneficiaryToRequest(Beneficiary $beneficiary, bool $convertForValidate = false, bool $convertForUpdate = false): array
    {
        $isDefaultBeneficiary = $beneficiary->isDefaultBeneficiary();
        $common = [
            'bank_country' => $beneficiary->getBankCountry(),
            'currency' => $beneficiary->getCurrency(),
            'beneficiary_country' => $beneficiary->getBeneficiaryCountry(),
            'account_number' => $beneficiary->getAccountNumber(),
            'routing_code_type_1' => $beneficiary->getRoutingCodeType1(),
            'routing_code_value_1' => $beneficiary->getRoutingCodeValue1(),
            'routing_code_type_2' => $beneficiary->getRoutingCodeType2(),
            'routing_code_value_2' => $beneficiary->getRoutingCodeValue2(),
            'bic_swift' => $beneficiary->getBicSwift(),
            'iban' => $beneficiary->getIban(),
            'bank_address' => \implode(', ', $beneficiary->getBankAddress() ?: []),
            'bank_name' => $beneficiary->getBankName(),
            'default_beneficiary' => (null === $isDefaultBeneficiary) ? null :
                ($isDefaultBeneficiary ? 'true' : 'false'),
            'bank_account_type' => $beneficiary->getBankAccountType(),
            'beneficiary_entity_type' => $beneficiary->getBeneficiaryEntityType(),
            'beneficiary_company_name' => $beneficiary->getBeneficiaryCompanyName(),
            'beneficiary_address' => \implode(', ', $beneficiary->getBeneficiaryAddress() ?: []),
            'beneficiary_first_name' => $beneficiary->getBeneficiaryFirstName(),
            'beneficiary_last_name' => $beneficiary->getBeneficiaryLastName(),
            'beneficiary_city' => $beneficiary->getBeneficiaryCity(),
            'beneficiary_postcode' => $beneficiary->getBeneficiaryPostCode(),
            'beneficiary_state_or_province' => $beneficiary->getBeneficiaryStateOrProvince(),
            'beneficiary_date_of_birth' => (null === $beneficiary->getBeneficiaryDateOfBirth()) ? null :
                $beneficiary->getBeneficiaryDateOfBirth()
                    ->format('Y-m-d'),
            'beneficiary_identification_type' => $beneficiary->getBeneficiaryIdentificationType(),
            'beneficiary_identification_value' => $beneficiary->getBeneficiaryIdentificationValue(),
            'payment_types' => $beneficiary->getPaymentTypes(),
        ];

        if ($convertForValidate) {
            return $common;
        }

        $common += [
            'bank_account_holder_name' => $beneficiary->getBankAccountHolderName(),
            'name' => $beneficiary->getName(),
            'email' => $beneficiary->getEmail(),
            'beneficiary_external_reference' => $beneficiary->getBeneficiaryExternalReference(),
        ];

        if ($convertForUpdate) {
            return $common;
        }

        return $common + [
                'creator_contact_id' => $beneficiary->getCreatorContactId(),
            ];
    }

    private function createBeneficiaryFromResponse(stdClass $response, bool $fromValidate = false): Beneficiary
    {
        $beneficiary = new Beneficiary();

        $beneficiary->setBankCountry($response->bank_country)
            ->setCurrency($response->currency)
            ->setBeneficiaryCountry($response->beneficiary_country)
            ->setPaymentTypes($response->payment_types)
            ->setBankName($response->bank_name)
            ->setBankAddress($response->bank_address)
            ->setAccountNumber($response->account_number)
            ->setIban($response->iban)
            ->setBicSwift($response->bic_swift)
            ->setBankAccountType($response->bank_account_type)
            ->setBeneficiaryAddress($response->beneficiary_address)
            ->setBeneficiaryEntityType($response->beneficiary_entity_type)
            ->setBeneficiaryCompanyName($response->beneficiary_company_name)
            ->setBeneficiaryFirstName($response->beneficiary_first_name)
            ->setBeneficiaryLastName($response->beneficiary_last_name)
            ->setBeneficiaryCity($response->beneficiary_city)
            ->setBeneficiaryPostCode($response->beneficiary_postcode)
            ->setBeneficiaryStateOrProvince($response->beneficiary_state_or_province)
            ->setBeneficiaryDateOfBirth(
                (null !== $response->beneficiary_date_of_birth) ? new DateTime($response->beneficiary_date_of_birth) :
                    null
            )
            ->setBeneficiaryIdentificationType($response->beneficiary_identification_type)
            ->setBeneficiaryIdentificationValue($response->beneficiary_identification_value)
            ->setRoutingCodeType1($response->routing_code_type_1)
            ->setRoutingCodeValue1($response->routing_code_value_1)
            ->setRoutingCodeType2($response->routing_code_type_2)
            ->setRoutingCodeValue2($response->routing_code_value_2);

        if (!$fromValidate) {
            $beneficiary->setName($response->name)
                ->setCreatorContactId($response->creator_contact_id)
                ->setEmail($response->email)
                ->setIsDefaultBeneficiary('true' === $response->default_beneficiary)
                ->setBankAccountHolderName($response->bank_account_holder_name)
                ->setCreatedAt(new DateTime($response->created_at))
                ->setUpdatedAt(new DateTime($response->updated_at))
                ->setBeneficiaryExternalReference($response->beneficiary_external_reference);
            $this->setIdProperty($beneficiary, $response->id);
        }

        return $beneficiary;
    }
}
