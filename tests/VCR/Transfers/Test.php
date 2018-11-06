<?php
namespace CurrencyCloud\Tests\VCR\Transfers;

use CurrencyCloud\Tests\BaseCurrencyCloudVCRTestCase;

class Test extends BaseCurrencyCloudVCRTestCase {

    /**
     * @vcr Transfers/can_get_transfer.yaml
     * @test
     */
    public function canGetTransfer(){
        $transfer = $this->getAuthenticatedClient()->transfers()->retrieve('dbc1b2c3-fc83-439a-8ce9-5cdfc2cb321a');

        $dummy = json_decode(
            '{"id":"dbc1b2c3-fc83-439a-8ce9-5cdfc2cb321a","short_reference":"BT-20180426-GKCRMN","source_account_id":"72970a7c-7921-431c-b95f-3438724ba16f","destination_account_id":"22ed17b5-b90c-424e-aa78-d24928b1778e","currency":"EUR","amount":"1000.00","status":"completed","reason":"Transfer Test","created_at":"2018-04-26T15:47:46+00:00","updated_at":"2018-04-26T15:47:46+00:00","completed_at":"2018-04-26T15:47:46+00:00","creator_account_id":"72970a7c-7921-431c-b95f-3438724ba16f","creator_contact_id":"a66ca63f-e668-47af-8bb9-74363240d781"}',
        true);

        $this->assertSame($dummy['id'], $transfer->getId());
        $this->assertSame($dummy['short_reference'], $transfer->getShortReference());
        $this->assertSame($dummy['source_account_id'], $transfer->getSourceAccountId());
        $this->assertSame($dummy['destination_account_id'], $transfer->getDestinationAccountId());
        $this->assertSame($dummy['currency'], $transfer->getCurrency());
        $this->assertSame($dummy['amount'], $transfer->getAmount());
        $this->assertSame($dummy['status'], $transfer->getStatus());
        $this->assertSame($dummy['reason'], $transfer->getReason());
    }
}