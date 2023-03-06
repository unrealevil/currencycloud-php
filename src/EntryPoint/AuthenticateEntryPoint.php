<?php

namespace CurrencyCloud\EntryPoint;

use CurrencyCloud\Client;
use CurrencyCloud\Session;

class AuthenticateEntryPoint extends AbstractEntryPoint
{
    private Session $session;

    public function __construct(Session $session, Client $client)
    {
        parent::__construct($client);
        $this->session = $session;
    }

    public function login(): void
    {
        $response = $this->request(
            'POST',
            'authenticate/api',
            [],
            [
                'login_id' => $this->session->getLoginId(),
                'api_key' => $this->session->getApiKey()
            ],
            [],
            false
        );

        $this->session->setAuthToken($response->auth_token);
    }

    public function close(): void
    {
        $this->request('POST', 'authenticate/close_session');
        $this->session->setAuthToken(null);
    }
}
