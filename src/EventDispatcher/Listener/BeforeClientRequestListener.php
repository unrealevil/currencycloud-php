<?php

namespace CurrencyCloud\EventDispatcher\Listener;

use CurrencyCloud\EntryPoint\AuthenticateEntryPoint;
use CurrencyCloud\EventDispatcher\Event\BeforeClientRequestEvent;
use CurrencyCloud\Session;

class BeforeClientRequestListener
{
    private AuthenticateEntryPoint $authenticateEntryPoint;
    private Session $session;

    public function __construct(Session $session, AuthenticateEntryPoint $authenticateEntryPoint)
    {
        $this->authenticateEntryPoint = $authenticateEntryPoint;
        $this->session = $session;
    }

    public function onBeforeClientRequestEvent(BeforeClientRequestEvent $event): void
    {
        if ($event->isSecured()) {
            if (null === $this->session->getAuthToken()) {
                $this->authenticateEntryPoint->login();
            }
        }
    }
}
