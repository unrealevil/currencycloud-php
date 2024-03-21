<?php

namespace CurrencyCloud\EntryPoint;

use CurrencyCloud\Model\DetailedRate;
use CurrencyCloud\Model\Rate;
use CurrencyCloud\Model\Rates;
use DateTime;
use stdClass;

class RatesEntryPoint extends AbstractEntryPoint
{
    public function multiple(array|string $currencyPairs, bool $ignoreInvalidPairs = null, string $onBehalfOf = null): Rates
    {
        if (!is_array($currencyPairs)) {
            $currencyPairs = [$currencyPairs];
        }
        $response = $this->request(
            'GET',
            'rates/find',
            [
                'currency_pair' => implode(',', $currencyPairs),
                'ignore_invalid_pairs' => (null === $ignoreInvalidPairs) ? null : ($ignoreInvalidPairs ? 'true' : 'false'),
                'on_behalf_of' => $onBehalfOf
            ]
        );
        $pairs = [];
        foreach ($response->rates as $pair => $data) {
            $pairs[$pair] = $this->createRateFromResponse($data);
        }
        return new Rates($pairs, $response->unavailable);
    }

    public function detailed(
        string $buyCurrency,
        string $sellCurrency,
        string $fixedSide,
        string $amount,
        DateTime $conversionDate = null,
        string $onBehalfOf = null,
        string $conversionDatePreference = null
    ): DetailedRate
    {
        $response = $this->request(
            'GET',
            'rates/detailed',
            [
                'buy_currency' => $buyCurrency,
                'sell_currency' => $sellCurrency,
                'fixed_side' => $fixedSide,
                'amount' => $amount,
                'conversion_date' => (null === $conversionDate) ? null : $conversionDate->format('Y-m-d'),
                'on_behalf_of' => $onBehalfOf,
                'conversion_date_preference' => $conversionDatePreference
            ]
        );
        return $this->createDetailedRateFromResponse($response);
    }

    private function createRateFromResponse(array $data): Rate
    {
        return new Rate($data[0], $data[1]);
    }

    protected function createDetailedRateFromResponse(stdClass $response): DetailedRate
    {
        return new DetailedRate(
            new DateTime($response->settlement_cut_off_time),
            $response->currency_pair,
            $response->client_buy_currency,
            $response->client_sell_currency,
            $response->client_buy_amount,
            $response->client_sell_amount,
            $response->fixed_side,
            $response->mid_market_rate ?? null,
            $response->core_rate,
            $response->partner_rate,
            $response->client_rate,
            $response->deposit_required,
            $response->deposit_amount,
            $response->deposit_currency
        );
    }
}
