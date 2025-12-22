<?php

namespace CurrencyCloud\Tests\Core;

use CurrencyCloud\Session;
use InvalidArgumentException;
use LogicException;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;


class SessionTest extends TestCase
{
    private Session $session;

    public function setUp(): void
    {
        parent::setUp();
        $this->session = new Session(Session::ENVIRONMENT_DEMONSTRATION, 'a', 'b');
    }

    #[Test]
    public function invalidEnvironmentThrowsException(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid environment test provided, expected one of [prod, demonstration, uat]');
        new Session('test', 'test', 'test');
    }

    #[Test]
    public function invalidLoginIdThrowsException(): void
    {

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Login ID can not be null');
        new Session(Session::ENVIRONMENT_DEMONSTRATION, null, 'test');
    }

    #[Test]
    public function invalidApiKeyThrowsException(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('API key can not be null');
        new Session(Session::ENVIRONMENT_DEMONSTRATION, 'test', null);
    }

    #[Test]
    public function onBehalfOfCanNotBeNull(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Contact ID expected to be UUID');
        $this->session->setOnBehalfOf(null);
    }

    #[Test]
    public function onBehalfOfMustBeValidUUID(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Contact ID expected to be UUID');
        $this->session->setOnBehalfOf('bok');
    }

    #[Test]
    public function onBehalfOfCanNotBeSetBeforeItIsUnset(): void
    {
        $this->expectException(LogicException::class);
        $this->expectExceptionMessage('Already in on-behalf-of call with ID: aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa');
        $this->session->setOnBehalfOf('aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa');
        $this->session->setOnBehalfOf('aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaab');
    }

    #[Test]
    public function onBehalfOfCanBeSetAfterUnset(): void
    {
        $this->session->setOnBehalfOf('aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa');
        $this->assertEquals('aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa', $this->session->getOnBehalfOf());
        $this->session->clearOnBehalfOf();
        $this->assertNull($this->session->getOnBehalfOf());
        $this->session->setOnBehalfOf('aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaab');
        $this->assertEquals('aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaab', $this->session->getOnBehalfOf());
    }

    private function setExpectedException(string $class, string $string)
    {
        $this->expectException($class);
        $this->expectExceptionMessage($string);
    }
}
