<?php

namespace CurrencyCloud\Tests\VCR\Rates;

use CurrencyCloud\Model\DetailedRate;
use CurrencyCloud\Model\Rates;
use CurrencyCloud\Tests\BaseCurrencyCloudVCRTestCase;

class Test extends BaseCurrencyCloudVCRTestCase
{
    /**
     * @vcr Rates/can_find.yaml
     * @test
     */
    public function canFind(): void
    {

        $rates = $this->getAuthenticatedClient()->rates()->multiple(['GBPUSD', 'EURGBP']);

        $this->assertInstanceOf(Rates::class, $rates);

        $dummy = json_decode(
            '{"rates":{"EURGBP":["0.71445","0.71508"],"GBPUSD":["1.52264","1.52334"]},"unavailable":[]}',
            true
        );
        foreach ($dummy['rates'] as $rate => $values) {
            $myRate = $rates->getRate($rate);
            $this->assertEquals($values[0], $myRate->getBidRate());
            $this->assertEquals($values[1], $myRate->getOfferRate());
        }
        $this->assertSameSize($dummy['rates'], $rates->getRates());
        $this->assertSameSize($dummy['unavailable'], $rates->getUnavailable());
    }

    /**
     * @vcr Rates/can_provided_detailed_rate.yaml
     * @test
     */
    public function canProvidedDetailedRate(): void
    {

        $detailedRate = $this->getAuthenticatedClient()->rates()->detailed('GBP', 'USD', 'buy', 10000);

        $this->assertInstanceOf(DetailedRate::class, $detailedRate);

        $dummy = json_decode(
            '{"settlement_cut_off_time":"2015-04-29T14:00:00Z","currency_pair":"GBPUSD","client_buy_currency":"GBP","client_sell_currency":"USD","client_buy_amount":"10000.00","client_sell_amount":"15234.00","fixed_side":"buy","mid_market_rate":"1.5231","client_rate":"1.5234","partner_rate":null,"core_rate":"1.5234","deposit_required":null,"deposit_amount":"0.0","deposit_currency":"USD"}',
            true
        );
        $this->validateObjectStrictName($detailedRate, $dummy);
    }
}
