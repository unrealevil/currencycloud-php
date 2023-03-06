<?php

namespace CurrencyCloud;

use InvalidArgumentException;
use LogicException;

class Session
{
    public const ENVIRONMENT_PRODUCTION = 'prod';
    public const ENVIRONMENT_DEMONSTRATION = 'demonstration';
    public const ENVIRONMENT_UAT = 'uat';

    private static array $urls = [
        self::ENVIRONMENT_PRODUCTION => 'https://api.currencycloud.com/v2/',
        self::ENVIRONMENT_DEMONSTRATION => 'https://devapi.currencycloud.com/v2/',
        self::ENVIRONMENT_UAT => 'https://api-uat1.ccycloud.com',
    ];

    private string $apiUrl;
    private ?string $onBehalfOf = null;
    private string $loginId;
    private string $apiKey;
    private ?string $authToken = null;

    public function __construct(?string $environment, ?string $loginId, ?string $apiKey)
    {
        if (!isset(self::$urls[$environment])) {
            throw new InvalidArgumentException(
                sprintf(
                    'Invalid environment %s provided, expected one of [%s]',
                    $environment,
                    implode(', ', array_keys(self::$urls))
                )
            );
        }
        if (null === $loginId) {
            throw new InvalidArgumentException('Login ID can not be null');
        }
        if (null === $apiKey) {
            throw new InvalidArgumentException('API key can not be null');
        }
        $this->apiUrl = self::$urls[$environment];
        $this->loginId = $loginId;
        $this->apiKey = $apiKey;
    }

    public function clearOnBehalfOf(): void
    {
        $this->onBehalfOf = null;
    }

    public function getOnBehalfOf(): ?string
    {
        return $this->onBehalfOf;
    }

    /**
     * @throws InvalidArgumentException When contact ID is not UUID
     * @throws LogicException If already in on-behalf-of call
     */
    public function setOnBehalfOf(?string $contactId): void
    {
        $pattern = '/[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/i';

        if (!is_string($contactId)
            || !preg_match($pattern, $contactId)
        ) {
            throw new InvalidArgumentException('Contact ID expected to be UUID');
        }

        if (null !== $this->onBehalfOf) {
            throw new LogicException(sprintf('Already in on-behalf-of call with ID: %s', $this->onBehalfOf));
        }

        $this->onBehalfOf = $contactId;
    }

    public function getApiUrl(): string
    {
        return $this->apiUrl;
    }

    public function getLoginId(): string
    {
        return $this->loginId;
    }

    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    public function getAuthToken(): ?string
    {
        return $this->authToken;
    }

    public function setAuthToken(?string $authToken): static
    {
        $this->authToken = $authToken;

        return $this;
    }
}
