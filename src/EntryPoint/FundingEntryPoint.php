<?php

namespace CurrencyCloud\EntryPoint;

use CurrencyCloud\Model\FundingAccount;
use CurrencyCloud\Model\FundingAccounts;
use CurrencyCloud\Model\Pagination;
use DateTime;
use stdClass;

use function array_merge;

class FundingEntryPoint extends AbstractEntryPoint
{
    public function findFundingAccounts(?Pagination $pagination, string $currency, ?string $accountId = null, ?string $paymentType = null, ?string $onBehalfOf = null): FundingAccounts
    {
        if (null === $pagination) {
            $pagination = new Pagination();
        }
        $response = $this->request(
            'GET',
            'funding_accounts/find',
            \array_merge(
                [
                    'currency' => $currency,
                    'account_id' => $accountId,
                    'payment_type' => $paymentType,
                    'on_behalf_of' => $onBehalfOf,
                ],
                $this->convertPaginationToRequest($pagination)
            )
        );

        return $this->createFundingAccountsFromResponse($response);
    }

    protected function createFundingAccountsFromResponse(stdClass $response): FundingAccounts
    {
        return new FundingAccounts(
            $this->createFundingAccountArrayFromResponse($response),
            $this->createPaginationFromResponse($response)
        );
    }

    protected function createFundingAccountArrayFromResponse(stdClass $response): array
    {
        $fundingAccounts = [];
        if (empty($response->funding_accounts)) {
            return $fundingAccounts;
        }
        foreach ($response->funding_accounts as $value) {
            $fundingAccounts[] = new FundingAccount(
                $value->id,
                $value->account_id,
                $value->account_number,
                $value->account_number_type,
                $value->account_holder_name,
                $value->bank_name,
                $value->bank_address,
                $value->bank_country,
                $value->currency,
                $value->payment_type,
                $value->routing_code,
                $value->routing_code_type,
                !empty($value->created_at) ? new DateTime($value->created_at) : null,
                !empty($value->updated_at) ? new DateTime($value->updated_at) : null
            );
        }

        return $fundingAccounts;
    }
}
