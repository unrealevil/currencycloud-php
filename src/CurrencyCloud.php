<?php

namespace CurrencyCloud;

use CurrencyCloud\EntryPoint\AccountsEntryPoint;
use CurrencyCloud\EntryPoint\AuthenticateEntryPoint;
use CurrencyCloud\EntryPoint\BalancesEntryPoint;
use CurrencyCloud\EntryPoint\BeneficiariesEntryPoint;
use CurrencyCloud\EntryPoint\ContactsEntryPoint;
use CurrencyCloud\EntryPoint\ConversionsEntryPoint;
use CurrencyCloud\EntryPoint\FundingEntryPoint;
use CurrencyCloud\EntryPoint\IbansEntryPoint;
use CurrencyCloud\EntryPoint\PayersEntryPoint;
use CurrencyCloud\EntryPoint\PaymentsEntryPoint;
use CurrencyCloud\EntryPoint\RatesEntryPoint;
use CurrencyCloud\EntryPoint\ReferenceEntryPoint;
use CurrencyCloud\EntryPoint\ReportsEntryPoint;
use CurrencyCloud\EntryPoint\TransactionsEntryPoint;
use CurrencyCloud\EntryPoint\TransfersEntryPoint;
use CurrencyCloud\EventDispatcher\Event\BeforeClientRequestEvent;
use CurrencyCloud\EventDispatcher\Event\ClientHttpErrorEvent;
use CurrencyCloud\EventDispatcher\Listener\BeforeClientRequestListener;
use CurrencyCloud\EventDispatcher\Listener\ClientHttpErrorListener;
use CurrencyCloud\EventDispatcher\Listener\SessionTimeoutListener;
use CurrencyCloud\EntryPoint\VansEntryPoint;
use GuzzleHttp\Handler\CurlFactory;
use GuzzleHttp\Handler\CurlHandler;
use GuzzleHttp\HandlerStack;
use Symfony\Component\EventDispatcher\EventDispatcher;

class CurrencyCloud
{
    private Session $session;
    private ReferenceEntryPoint $referenceEntryPoint;
    private AuthenticateEntryPoint $authenticateEntryPoint;
    private AccountsEntryPoint $accountsEntryPoint;
    private BalancesEntryPoint $balancesEntryPoint;
    private BeneficiariesEntryPoint $beneficiariesEntryPoint;
    private TransactionsEntryPoint $transactionsEntryPoint;
    private RatesEntryPoint $ratesEntryPoint;
    private PayersEntryPoint $payersEntryPoint;
    private IbansEntryPoint $ibansEntryPoint;
    private ConversionsEntryPoint $conversionsEntryPoint;
    private ContactsEntryPoint $contactsEntryPoint;
    private PaymentsEntryPoint $paymentsEntryPoint;
    private ReportsEntryPoint $reportsEntryPoint;
    private TransfersEntryPoint $transfersEntryPoint;
    private VansEntryPoint $vansEntryPoint;
    private FundingEntryPoint $fundingEntryPoint;

    public static string $SDK_VERSION = '1.5.2';

    public function __construct(
        Session $session,
        AuthenticateEntryPoint $authenticateEntryPoint,
        AccountsEntryPoint $accountsEntryPoint,
        BalancesEntryPoint $balancesEntryPoint,
        BeneficiariesEntryPoint $beneficiariesEntryPoint,
        ContactsEntryPoint $contactsEntryPoint,
        ConversionsEntryPoint $conversionsEntryPoint,
        PayersEntryPoint $payersEntryPoint,
        IbansEntryPoint $ibansEntryPoint,
        PaymentsEntryPoint $paymentsEntryPoint,
        ReferenceEntryPoint $referenceEntryPoint,
        ReportsEntryPoint $reportsEntryPoint,
        RatesEntryPoint $ratesEntryPoint,
        TransactionsEntryPoint $transactionsEntryPoint,
        TransfersEntryPoint $transfersEntryPoint,
        VansEntryPoint $vanEntryPoint,
        FundingEntryPoint $fundingEntryPoint
    ) {
        $this->referenceEntryPoint = $referenceEntryPoint;
        $this->session = $session;
        $this->authenticateEntryPoint = $authenticateEntryPoint;
        $this->accountsEntryPoint = $accountsEntryPoint;
        $this->balancesEntryPoint = $balancesEntryPoint;
        $this->beneficiariesEntryPoint = $beneficiariesEntryPoint;
        $this->transactionsEntryPoint = $transactionsEntryPoint;
        $this->ratesEntryPoint = $ratesEntryPoint;
        $this->payersEntryPoint = $payersEntryPoint;
        $this->ibansEntryPoint = $ibansEntryPoint;
        $this->conversionsEntryPoint = $conversionsEntryPoint;
        $this->contactsEntryPoint = $contactsEntryPoint;
        $this->paymentsEntryPoint = $paymentsEntryPoint;
        $this->reportsEntryPoint = $reportsEntryPoint;
        $this->transfersEntryPoint = $transfersEntryPoint;
        $this->vansEntryPoint = $vanEntryPoint;
        $this->fundingEntryPoint = $fundingEntryPoint;
    }

    public static function createDefault(Session $session, Client $client = null): CurrencyCloud
    {
        if (null === $client) {
            $eventDispatcher = new EventDispatcher();

            $client = new Client($session, new \GuzzleHttp\Client([
                'sync' => true,
                'handler' => HandlerStack::create(new CurlHandler([
                    'handle_factory' => new CurlFactory(0)
                ]))
            ]), $eventDispatcher);

            $authenticateEntryPoint = new AuthenticateEntryPoint($session, $client);

            $eventDispatcher->addListener(ClientHttpErrorEvent::NAME, [
                    new ClientHttpErrorListener(), 'onClientHttpErrorEvent'
            ], -255);
            $eventDispatcher->addListener(ClientHttpErrorEvent::NAME, [
                new SessionTimeoutListener($client, $authenticateEntryPoint), 'onClientHttpErrorEvent'
            ], -254);
            $eventDispatcher->addListener(BeforeClientRequestEvent::NAME, [
                    new BeforeClientRequestListener($session, $authenticateEntryPoint), 'onBeforeClientRequestEvent'
            ], -255);
        } else {
            $authenticateEntryPoint = new AuthenticateEntryPoint($session, $client);
        }
        $entityManager = new SimpleEntityManager();
        return new CurrencyCloud(
            $session,
            $authenticateEntryPoint,
            new AccountsEntryPoint($entityManager, $client),
            new BalancesEntryPoint($client),
            new BeneficiariesEntryPoint($entityManager, $client),
            new ContactsEntryPoint($entityManager, $client),
            new ConversionsEntryPoint($client),
            new PayersEntryPoint($client),
            new IbansEntryPoint($entityManager, $client),
            new PaymentsEntryPoint($entityManager, $client),
            new ReferenceEntryPoint($client),
            new ReportsEntryPoint($entityManager, $client),
            new RatesEntryPoint($client),
            new TransactionsEntryPoint($client),
            new TransfersEntryPoint($entityManager, $client),
            new VansEntryPoint($entityManager, $client),
            new FundingEntryPoint($client)
        );
    }

    public function authenticate(): AuthenticateEntryPoint
    {
        return $this->authenticateEntryPoint;
    }

    public function accounts(): AccountsEntryPoint
    {
        return $this->accountsEntryPoint;
    }

    public function balances(): BalancesEntryPoint
    {
        return $this->balancesEntryPoint;
    }

    public function beneficiaries(): BeneficiariesEntryPoint
    {
        return $this->beneficiariesEntryPoint;
    }

    public function contacts(): ContactsEntryPoint
    {
        return $this->contactsEntryPoint;
    }

    public function conversions(): ConversionsEntryPoint
    {
        return $this->conversionsEntryPoint;
    }

    public function payers(): PayersEntryPoint
    {
        return $this->payersEntryPoint;
    }

    public function ibans(): IbansEntryPoint
    {
        return $this->ibansEntryPoint;
    }

    public function payments(): PaymentsEntryPoint
    {
        return $this->paymentsEntryPoint;
    }

    public function reference(): ReferenceEntryPoint
    {
        return $this->referenceEntryPoint;
    }

    public function reports(): ReportsEntryPoint
    {
        return $this->reportsEntryPoint;
    }

    public function rates(): RatesEntryPoint
    {
        return $this->ratesEntryPoint;
    }

    public function transactions(): TransactionsEntryPoint
    {
        return $this->transactionsEntryPoint;
    }

    public function transfers(): TransfersEntryPoint
    {
        return $this->transfersEntryPoint;
    }

    public function vans(): VansEntryPoint
    {
        return $this->vansEntryPoint;
    }

    public function funding(): FundingEntryPoint
    {
        return $this->fundingEntryPoint;
    }

    public function onBehalfOf(string $contactId, callable $callable): void
    {
        $this->session->setOnBehalfOf($contactId);

        try {
            $callable($this);
        } finally {
            $this->session->clearOnBehalfOf();
        }
    }

    public function getSession(): Session
    {
        return $this->session;
    }
}
