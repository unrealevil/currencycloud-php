<?php

namespace CurrencyCloud\EntryPoint;

use CurrencyCloud\Criteria\FindWithdrawalAccountsCriteria;
use CurrencyCloud\Model\Pagination;
use CurrencyCloud\Model\WithdrawalAccount;
use CurrencyCloud\Model\WithdrawalAccountFunds;
use CurrencyCloud\Model\WithdrawalAccounts;
use DateTime;
use function sprintf;

class WithdrawalAccountsEntryPoint extends AbstractEntityEntryPoint
{
    public function findWithdrawalAccounts(FindWithdrawalAccountsCriteria $findWithdrawalAccountsCriteria = null, Pagination $pagination = null): WithdrawalAccounts
    {
        if (null === $findWithdrawalAccountsCriteria) {
            $findWithdrawalAccountsCriteria = new FindWithdrawalAccountsCriteria();
        }
        if (null === $pagination) {
            $pagination = new Pagination();
        }

        return $this->doFind('withdrawal_accounts/find', $findWithdrawalAccountsCriteria, $pagination, function($findWithdrawalAccountsCriteria) {
            return $this->convertFindWithdrawalAccountsCriteriaToRequest($findWithdrawalAccountsCriteria);
        }, function($response) {
            return $this->convertResponseToWithdrawalAccount($response);
        }, function(array $entities, Pagination $pagination) {
            return new WithdrawalAccounts($entities, $pagination);
        }, 'withdrawal_accounts');
    }

    public function pullFunds(string $withdrawalAccountId, string $reference, string $amount): WithdrawalAccountFunds
    {
        $response = $this->request(
            'POST',
            sprintf('withdrawal_accounts/%s/pull_funds', $withdrawalAccountId),
            requestParams: [
                'reference' => $reference,
                'amount' => $amount,
            ]
        );

        return $this->convertResponseToWithdrawalAccountFunds($response);
    }

    protected function convertFindWithdrawalAccountsCriteriaToRequest(FindWithdrawalAccountsCriteria $findWithdrawalAccountsCriteria): array
    {
        return [
            'account_id' => $findWithdrawalAccountsCriteria->getAccountId(),
        ];
    }

    protected function convertResponseToWithdrawalAccount($response): WithdrawalAccount
    {
        $withdrawalAccount = new WithdrawalAccount();

        $this->setIdProperty($withdrawalAccount, $response->id);
        $withdrawalAccount->setAccountId($response->account_id);
        $withdrawalAccount->setAccountName($response->account_name);
        $withdrawalAccount->setAccountHolderName($response->account_holder_name);
        $withdrawalAccount->setAccountHolderDob(null !== $response->account_holder_dob ? new DateTime($response->account_holder_dob) : null);
        $withdrawalAccount->setRoutingCode($response->routing_code);
        $withdrawalAccount->setAccountNumber($response->account_number);
        $withdrawalAccount->setCurrency($response->currency);

        return $withdrawalAccount;
    }

    protected function convertResponseToWithdrawalAccountFunds($response): WithdrawalAccountFunds
    {
        $withdrawalAccountFunds = new WithdrawalAccountFunds();

        $this->setIdProperty($withdrawalAccountFunds, $response->id);
        $withdrawalAccountFunds->setWithdrawalAccountId($response->withdrawal_account_id);
        $withdrawalAccountFunds->setReference($response->reference);
        $withdrawalAccountFunds->setAmount($response->amount);
        $withdrawalAccountFunds->setCreatedAt(null !== $response->created_at ? new DateTime($response->created_at) : null);

        return $withdrawalAccountFunds;
    }
}
