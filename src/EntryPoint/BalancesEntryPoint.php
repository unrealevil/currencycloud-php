<?php

namespace CurrencyCloud\EntryPoint;

use CurrencyCloud\Model\Balance;
use CurrencyCloud\Model\Balances;
use CurrencyCloud\Model\MarginBalanceTopUp;
use CurrencyCloud\Model\Pagination;
use DateTime;
use DateTimeInterface;
use stdClass;

use function sprintf;

class BalancesEntryPoint extends AbstractEntryPoint
{
    public function find(?float $amountFrom = null, ?float $amountTo = null, ?DateTime $asAtDate = null, ?Pagination $pagination = null, ?string $onBehalfOf = null): Balances
    {
        if (null === $pagination) {
            $pagination = new Pagination();
        }
        $response = $this->request(
            'GET',
            'balances/find',
            [
                'amount_from' => $amountFrom,
                'amount_to' => $amountTo,
                'as_at_date' => (null === $asAtDate) ? null : $asAtDate->format(DateTimeInterface::RFC3339),
                'order' => $pagination->getOrder(),
                'page' => $pagination->getCurrentPage(),
                'per_page' => $pagination->getPerPage(),
                'order_asc_desc' => $pagination->getOrderAscDesc(),
                'on_behalf_of' => $onBehalfOf,
            ]
        );
        $balances = [];
        foreach ($response->balances as $data) {
            $balances[] = $this->createBalanceFromResponse($data);
        }

        return new Balances($balances, $this->createPaginationFromResponse($response));
    }

    public function retrieve(string $currency, ?string $onBehalfOf = null): Balance
    {
        $response = $this->request(
            'GET',
            \sprintf('balances/%s', $currency),
            [
                'on_behalf_of' => $onBehalfOf,
            ]
        );

        return $this->createBalanceFromResponse($response);
    }

    public function topUpMargin(string $currency, string $amount, ?string $onBehalfOf = null): MarginBalanceTopUp
    {
        $response = $this->request(
            'POST',
            'balances/top_up_margin',
            requestParams: [
                'on_behalf_of' => $onBehalfOf,
                'currency' => $currency,
                'amount' => $amount
            ]
        );

        return new MarginBalanceTopUp($response->account_id, $response->currency, $response->transferred_amount, new DateTime($response->transfer_completed_at));
    }

    public function createBalanceFromResponse(stdClass $response): Balance
    {
        $balance = new Balance(
            $response->account_id,
            $response->currency,
            $response->amount,
            new DateTime($response->created_at),
            new DateTime($response->updated_at)
        );
        $this->setIdProperty($balance, $response->id);

        return $balance;
    }
}
