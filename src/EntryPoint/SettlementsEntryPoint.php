<?php

namespace CurrencyCloud\EntryPoint;

use CurrencyCloud\Criteria\FindSettlementsCriteria;
use CurrencyCloud\Model\Pagination;
use CurrencyCloud\Model\Settlement;
use CurrencyCloud\Model\SettlementEntry;
use CurrencyCloud\Model\Settlements;
use DateTime;
use DateTimeInterface;
use stdClass;

class SettlementsEntryPoint extends AbstractEntityEntryPoint
{

    public function create(string $type = null, string $onBehalfOf = null): Settlement
    {
        return $this->doCreate('settlements/create', $type, function($type) {
            return ['type' => $type];
        }, function(stdClass $response) {
            return $this->createSettlementFromResponse($response);
        }, $onBehalfOf);
    }

    protected function createSettlementFromResponse(stdClass $response): Settlement
    {
        $entries = [];
        foreach ($response->entries as $temp) {
            $r = [];
            foreach ($temp as $currency => $entry) {
                $r[$currency] = new SettlementEntry($entry->send_amount, $entry->receive_amount);
            }
            $entries[] = $r;
        }

        $settlement = new Settlement();
        $settlement->setShortReference($response->short_reference)
            ->setStatus($response->status)
            ->setType($response->type ?? null)
            ->setConversionIds($response->conversion_ids)
            ->setEntries($entries)
            ->setCreatedAt(new DateTime($response->created_at))
            ->setUpdatedAt(new DateTime($response->updated_at))
            ->setReleasedAt($response->released_at ? new DateTime($response->released_at) : null);

        $this->setIdProperty($settlement, $response->id);

        return $settlement;
    }

    public function retrieve(string $id, string $onBehalfOf = null): Settlement
    {
        return $this->doRetrieve(sprintf('settlements/%s', $id), function(stdClass $response) {
            return $this->createSettlementFromResponse($response);
        }, $onBehalfOf);
    }

    public function delete(Settlement $settlement, string $onBehalfOf = null): Settlement
    {
        return $this->doDelete(sprintf('settlements/%s/delete', $settlement->getId()), $settlement, function(stdClass $response) {
            return $this->createSettlementFromResponse($response);
        }, $onBehalfOf);
    }

    public function addConversion(string $settlementId, string $conversionId, string $onBehalfOf = null): Settlement
    {
        $response = $this->request(
            'POST',
            sprintf('settlements/%s/add_conversion', $settlementId),
            [],
            [
                'conversion_id' => $conversionId,
                'on_behalf_of' => $onBehalfOf,
            ]
        );

        return $this->createSettlementFromResponse($response);
    }

    public function removeConversion(string $settlementId, string $conversionId, string $onBehalfOf = null): Settlement
    {
        $response = $this->request(
            'POST',
            sprintf('settlements/%s/remove_conversion', $settlementId),
            [],
            [
                'conversion_id' => $conversionId,
                'on_behalf_of' => $onBehalfOf,
            ]
        );

        return $this->createSettlementFromResponse($response);
    }

    public function release(string $id, string $onBehalfOf = null): Settlement
    {
        $response = $this->request(
            'POST',
            sprintf('settlements/%s/release', $id),
            [],
            [
                'on_behalf_of' => $onBehalfOf,
            ]
        );

        return $this->createSettlementFromResponse($response);
    }

    public function unRelease(string $id, string $onBehalfOf = null): Settlement
    {
        $response = $this->request(
            'POST',
            sprintf('settlements/%s/unrelease', $id),
            [],
            [
                'on_behalf_of' => $onBehalfOf,
            ]
        );

        return $this->createSettlementFromResponse($response);
    }

    public function find(
        string $shortReference = null,
        string $status = null,
        FindSettlementsCriteria $criteria = null,
        Pagination $pagination = null,
        $onBehalfOf = null
    ): Settlements
    {
        if (null === $criteria) {
            $criteria = new FindSettlementsCriteria();
        }
        if (null === $pagination) {
            $pagination = new Pagination();
        }

        return $this->doFind('settlements/find', $criteria, $pagination, function($criteria, $onBehalfOf) use ($shortReference, $status) {
            return $this->convertFindSettlementsCriteriaToRequest($criteria) + [
                    'short_reference' => $shortReference,
                    'status' => $status,
                    'on_behalf_of' => $onBehalfOf,
                ];
        }, function(stdClass $response) {
            return $this->createSettlementFromResponse($response);
        }, function($items, $pagination) {
            return new Settlements($items, $pagination);
        }, 'settlements', $onBehalfOf);
    }

    private function convertFindSettlementsCriteriaToRequest(FindSettlementsCriteria $criteria): array
    {
        $createdAtFrom = $criteria->getCreatedAtFrom();
        $createdAtTo = $criteria->getCreatedAtTo();
        $updatedAtFrom = $criteria->getUpdatedAtFrom();
        $updatedAtTo = $criteria->getUpdatedAtTo();
        $releasedAtFrom = $criteria->getReleasedAtFrom();
        $releasedAtTo = $criteria->getReleasedAtTo();

        return [
            'created_at_from' => (null === $createdAtFrom) ? null : $createdAtFrom->format(DateTimeInterface::ATOM),
            'created_at_to' => (null === $createdAtTo) ? null : $createdAtTo->format(DateTimeInterface::ATOM),
            'updated_at_from' => (null === $updatedAtFrom) ? null : $updatedAtFrom->format(DateTimeInterface::ATOM),
            'updated_at_to' => (null === $updatedAtTo) ? null : $updatedAtTo->format(DateTimeInterface::ATOM),
            'released_at_from' => (null === $releasedAtFrom) ? null : $releasedAtFrom->format(DateTimeInterface::ATOM),
            'released_at_to' => (null === $releasedAtTo) ? null : $releasedAtTo->format(DateTimeInterface::ATOM),
        ];
    }
}
