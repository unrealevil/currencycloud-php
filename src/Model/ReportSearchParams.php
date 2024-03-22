<?php

namespace CurrencyCloud\Model;

use stdClass;

class ReportSearchParams
{
    private ?string $shortReference;
    private ?string $description;
    private ?string $accountId;
    private ?string $contactId;
    private ?string $createdAtFrom;
    private ?string $createdAtTo;
    private ?string $expirationDateFrom;
    private ?string $expirationDateTo;
    private ?string $status;
    private ?string $reportType;
    private ?string $onBehalfOf;
    private ?string $buyCurrency;
    private ?string $sellCurrency;
    private ?string $clientBuyAmountFrom;
    private ?string $clientBuyAmountTo;
    private ?string $clientSellAmountFrom;
    private ?string $clientSellAmountTo;
    private ?string $partnerBuyAmountFrom;
    private ?string $partnerBuyAmountTo;
    private ?string $partnerSellAmountFrom;
    private ?string $partnerSellAmountTo;
    private ?string $clientStatus;
    private ?string $conversionDateFrom;
    private ?string $conversionDateTo;
    private ?string $settlementDateFrom;
    private ?string $settlementDateTo;
    private ?string $updatedAtFrom;
    private ?string $updatedAtTo;
    private ?string $uniqueRequestId;
    private ?string $scope;
    private ?string $currency;
    private ?string $amountFrom;
    private ?string $amountTo;
    private ?string $paymentDateFrom;
    private ?string $paymentDateTo;
    private ?string $transferedAtFrom;
    private ?string $transferedAtTo;
    private ?string $beneficiaryId;
    private ?string $conversionId;
    private ?string $withDeleted;
    private ?string $paymentGroupId;

    public function __construct(stdClass $data)
    {
        $this->shortReference = $this->getValue($data, 'short_reference');
        $this->description = $this->getValue($data, 'description');
        $this->accountId = $this->getValue($data, 'account_id');
        $this->contactId = $this->getValue($data, 'contact_id');
        $this->createdAtFrom = $this->getValue($data, 'created_at_from');
        $this->createdAtTo = $this->getValue($data, 'created_at_to');
        $this->expirationDateFrom = $this->getValue($data, 'expiration_date_from');
        $this->expirationDateTo = $this->getValue($data, 'expiration_date_to');
        $this->status = $this->getValue($data, 'status');
        $this->reportType = $this->getValue($data, 'report_type');
        $this->onBehalfOf = $this->getValue($data, 'on_behalf_of');
        $this->buyCurrency = $this->getValue($data, 'buy_currency');
        $this->sellCurrency = $this->getValue($data, 'sell_currency');
        $this->clientBuyAmountFrom = $this->getValue($data, 'client_buy_amount_from');
        $this->clientBuyAmountTo = $this->getValue($data, 'client_buy_amount_to');
        $this->clientSellAmountFrom = $this->getValue($data, 'client_sell_amount_from');
        $this->clientSellAmountTo = $this->getValue($data, 'client_sell_amount_to');
        $this->partnerBuyAmountFrom = $this->getValue($data, 'partner_buy_amount_from');
        $this->partnerBuyAmountTo = $this->getValue($data, 'partner_buy_amount_to');
        $this->partnerSellAmountFrom = $this->getValue($data, 'partner_sell_amount_from');
        $this->partnerSellAmountTo = $this->getValue($data, 'partner_sell_amount_to');
        $this->clientStatus = $this->getValue($data, 'client_status');
        $this->conversionDateFrom = $this->getValue($data, 'conversion_date_from');
        $this->conversionDateTo = $this->getValue($data, 'conversion_date_to');
        $this->settlementDateFrom = $this->getValue($data, 'settlement_date_from');
        $this->settlementDateTo = $this->getValue($data, 'settlement_date_to');
        $this->updatedAtFrom = $this->getValue($data, 'updated_at_from');
        $this->updatedAtTo = $this->getValue($data, 'updated_at_to');
        $this->uniqueRequestId = $this->getValue($data, 'unique_request_id');
        $this->scope = $this->getValue($data, 'scope');
        $this->currency = $this->getValue($data, 'currency');
        $this->amountFrom = $this->getValue($data, 'amount_from');
        $this->amountTo = $this->getValue($data, 'amount_to');
        $this->paymentDateFrom = $this->getValue($data, 'payment_date_from');
        $this->paymentDateTo = $this->getValue($data, 'payment_date_to');
        $this->transferedAtFrom = $this->getValue($data, 'transfered_at_from');
        $this->transferedAtTo = $this->getValue($data, 'transfered_at_to');
        $this->beneficiaryId = $this->getValue($data, 'beneficiary_id');
        $this->conversionId = $this->getValue($data, 'conversion_id');
        $this->withDeleted = $this->getValue($data, 'with_deleted');
        $this->paymentGroupId = $this->getValue($data, 'payment_group_id');
    }

    protected function getValue(stdClass $data, string $name): ?string
    {
        return !empty($data->$name) ? $data->$name : null;
    }

    public function getShortReference(): ?string
    {
        return $this->shortReference;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getAccountId(): ?string
    {
        return $this->accountId;
    }

    public function getContactId(): ?string
    {
        return $this->contactId;
    }

    public function getCreatedAtFrom(): ?string
    {
        return $this->createdAtFrom;
    }

    public function getCreatedAtTo(): ?string
    {
        return $this->createdAtTo;
    }

    public function getExpirationDateFrom(): ?string
    {
        return $this->expirationDateFrom;
    }

    public function getExpirationDateTo(): ?string
    {
        return $this->expirationDateTo;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function getReportType(): ?string
    {
        return $this->reportType;
    }

    public function getOnBehalfOf(): ?string
    {
        return $this->onBehalfOf;
    }

    public function getBuyCurrency(): ?string
    {
        return $this->buyCurrency;
    }

    public function getSellCurrency(): ?string
    {
        return $this->sellCurrency;
    }

    public function getClientBuyAmountFrom(): ?string
    {
        return $this->clientBuyAmountFrom;
    }

    public function getClientBuyAmountTo(): ?string
    {
        return $this->clientBuyAmountTo;
    }

    public function getClientSellAmountFrom(): ?string
    {
        return $this->clientSellAmountFrom;
    }

    public function getClientSellAmountTo(): ?string
    {
        return $this->clientSellAmountTo;
    }

    public function getPartnerBuyAmountFrom(): ?string
    {
        return $this->partnerBuyAmountFrom;
    }

    public function getPartnerBuyAmountTo(): ?string
    {
        return $this->partnerBuyAmountTo;
    }

    public function getPartnerSellAmountFrom(): ?string
    {
        return $this->partnerSellAmountFrom;
    }

    public function getPartnerSellAmountTo(): ?string
    {
        return $this->partnerSellAmountTo;
    }

    public function getClientStatus(): ?string
    {
        return $this->clientStatus;
    }

    public function getConversionDateFrom(): ?string
    {
        return $this->conversionDateFrom;
    }

    public function getConversionDateTo(): ?string
    {
        return $this->conversionDateTo;
    }

    public function getSettlementDateFrom(): ?string
    {
        return $this->settlementDateFrom;
    }

    public function getSettlementDateTo(): ?string
    {
        return $this->settlementDateTo;
    }

    public function getUpdatedAtFrom(): ?string
    {
        return $this->updatedAtFrom;
    }

    public function getUpdatedAtTo(): ?string
    {
        return $this->updatedAtTo;
    }

    public function getUniqueRequestId(): ?string
    {
        return $this->uniqueRequestId;
    }

    public function getScope(): ?string
    {
        return $this->scope;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function getAmountFrom(): ?string
    {
        return $this->amountFrom;
    }

    public function getAmountTo(): ?string
    {
        return $this->amountTo;
    }

    public function getPaymentDateFrom(): ?string
    {
        return $this->paymentDateFrom;
    }

    public function getPaymentDateTo(): ?string
    {
        return $this->paymentDateTo;
    }

    public function getTransferedAtFrom(): ?string
    {
        return $this->transferedAtFrom;
    }

    public function getTransferedAtTo(): ?string
    {
        return $this->transferedAtTo;
    }

    public function getBeneficiaryId(): ?string
    {
        return $this->beneficiaryId;
    }

    public function getConversionId(): ?string
    {
        return $this->conversionId;
    }

    public function getWithDeleted(): ?string
    {
        return $this->withDeleted;
    }

    public function getPaymentGroupId(): ?string
    {
        return $this->paymentGroupId;
    }
}
