<?php

namespace CurrencyCloud\EntryPoint;

use CurrencyCloud\Criteria\FindTransferCriteria;
use CurrencyCloud\Model\Pagination;
use CurrencyCloud\Model\Transfer;
use CurrencyCloud\Model\Transfers;
use DateTime;
use stdClass;

use function sprintf;

class TransfersEntryPoint extends AbstractEntityEntryPoint
{
    public function retrieve(string $id, ?string $onBehalfOf = null): Transfer
    {
        return $this->doRetrieve(
            \sprintf('transfers/%s', $id),
            function(stdClass $response) {
                return $this->createTransferFromResponse($response);
            },
            $onBehalfOf
        );
    }

    protected function createTransferFromResponse(stdClass $response): Transfer
    {
        return new Transfer(
            $response->id,
            $response->short_reference,
            $response->source_account_id,
            $response->destination_account_id,
            $response->currency,
            $response->amount,
            $response->status,
            $response->reason,
            !empty($response->created_at) ? new DateTime($response->created_at) : null,
            !empty($response->updated_at) ? new DateTime($response->updated_at) : null,
            !empty($response->completed_at) ? new DateTime($response->completed_at) : null,
            $response->creator_account_id,
            $response->creator_contact_id,
            $response->unique_request_id
        );
    }

    public function find(FindTransferCriteria $findTransferCriteria, Pagination $pagination, ?string $onBehalfOf = null): Transfers
    {
        return $this->doFind(
            'transfers/find',
            $findTransferCriteria,
            $pagination,
            function() use ($findTransferCriteria, $pagination, $onBehalfOf) {
                return $this->convertFindCriteriaToRequest(
                    $findTransferCriteria
                ) +
                    $this->convertPaginationToRequest($pagination) +
                    ['on_behalf_of' => $onBehalfOf];
            },
            function($response) {
                return $this->createTransferFromResponse($response);
            },
            static function($entities, $pagination) {
                return new Transfers($entities, $pagination);
            },
            'transfers',
            $onBehalfOf
        );
    }

    protected function convertFindCriteriaToRequest(FindTransferCriteria $criteria): array
    {
        return [
            'short_reference' => $criteria->getShortReference(),
            'source_account_id' => $criteria->getSourceAccountId(),
            'destination_account_id' => $criteria->getDestinationAccountId(),
            'status' => $criteria->getStatus(),
            'currency' => $criteria->getCurrency(),
            'amount_from' => $criteria->getAmountFrom(),
            'amount_to' => $criteria->getAmountTo(),
            'created_at_from' => $criteria->getCreatedAtFrom(),
            'created_at_to' => $criteria->getCreatedAtTo(),
            'updated_at_from' => $criteria->getUpdatedAtFrom(),
            'updated_at_to' => $criteria->getUpdatedAtTo(),
            'completed_at_from' => $criteria->getCompletedAtFrom(),
            'completed_at_to' => $criteria->getCompletedAtFrom(),
            'creator_account_id' => $criteria->getCreatorAccountId(),
            'creator_contact_id' => $criteria->getCreatorContactId(),
            'unique_request_id' => $criteria->getUniqueRequestId(),
        ];
    }

    public function convertTransferFromResponse(stdClass $response): Transfer
    {
        return new Transfer(
            $response->id,
            $response->short_reference,
            $response->source_account_id,
            $response->destination_account_id,
            $response->currency,
            $response->amount,
            $response->status,
            $response->reason,
            $response->created_at,
            $response->updated_at,
            $response->completed_at,
            $response->creator_account_id,
            $response->creator_contact_id,
            $response->unique_request_id
        );
    }

    public function create(string $sourceAccountId, string $destinationAccountId, string $currency, string $amount, ?string $reason = null, ?string $uniqueRequestId = null): Transfer
    {
        $response = $this->request(
            'POST',
            'transfers/create',
            [],
            [
                'source_account_id' => $sourceAccountId,
                'destination_account_id' => $destinationAccountId,
                'currency' => $currency,
                'amount' => $amount,
                'reason' => $reason,
                'unique_request_id' => $uniqueRequestId,
            ]
        );

        return $this->createTransferFromResponse($response);
    }

    public function cancel(string $id): Transfer
    {
        $response = $this->request('POST', \sprintf('transfers/%s/cancel', $id));

        return $this->createTransferFromResponse($response);
    }
}
