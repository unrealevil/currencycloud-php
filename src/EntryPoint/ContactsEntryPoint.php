<?php

namespace CurrencyCloud\EntryPoint;

use CurrencyCloud\Model\Contact;
use CurrencyCloud\Model\Contacts;
use CurrencyCloud\Model\Pagination;
use DateTime;
use stdClass;

class ContactsEntryPoint extends AbstractEntityEntryPoint
{
    public function createResetToken(string $loginId = null): void
    {
        $this->request(
            'POST',
            'contacts/reset_token/create',
            [],
            [
                'login_id' => $loginId
            ]
        );
    }

    public function create(Contact $contact): Contact
    {
        return $this->doCreate('contacts/create', $contact, function ($contact) {
            return $this->convertContactToRequest($contact);
        }, function (stdClass $response) {
            return $this->createContactFromResponse($response);
        });
    }

    private function convertContactToRequest(Contact $contact, bool $convertForFind = false): array
    {
        $dateOfBirth = $contact->getDateOfBirth();
        $common = [
            'account_id' => $contact->getAccountId(),
            'account_name' => $contact->getAccountName(),
            'first_name' => $contact->getFirstName(),
            'last_name' => $contact->getLastName(),
            'email_address' => $contact->getEmailAddress(),
            'phone_number' => $contact->getPhoneNumber(),
            'your_reference' => $contact->getYourReference(),
            'login_id' => $contact->getLoginId(),
            'status' => $contact->getStatus(),
            'locale' => $contact->getLocale(),
            'timezone' => $contact->getTimezone()
        ];
        if ($convertForFind) {
            return $common;
        }
        return $common + [
            'mobile_phone_number' => $contact->getMobilePhoneNumber(),
            'date_of_birth' => (null === $dateOfBirth) ? null : $dateOfBirth->format('Y-m-d')
        ];
    }

    private function createContactFromResponse(stdClass $response): Contact
    {
        $contact = new Contact();
        $contact->setLoginId($response->login_id)
            ->setYourReference($response->your_reference)
            ->setFirstName($response->first_name)
            ->setLastName($response->last_name)
            ->setEmailAddress($response->email_address)
            ->setAccountId($response->account_id)
            ->setAccountName($response->account_name)
            ->setStatus($response->status)
            ->setPhoneNumber($response->phone_number)
            ->setMobilePhoneNumber($response->mobile_phone_number)
            ->setLocale($response->locale)
            ->setTimezone($response->timezone)
            ->setDateOfBirth(new DateTime($response->date_of_birth))
            ->setCreatedAt(new DateTime($response->created_at))
            ->setUpdatedAt(new DateTime($response->updated_at));

        $this->setIdProperty($contact, $response->id);
        return $contact;
    }

    public function find(Contact $contact = null, Pagination $pagination = null): Contacts
    {
        if (null === $contact) {
            $contact = new Contact();
        }
        if (null === $pagination) {
            $pagination = new Pagination();
        }
        return $this->doFind('contacts/find', $contact, $pagination, function ($contact) {
            return $this->convertContactToRequest($contact, true);
        }, function (stdClass $response) {
            return $this->createContactFromResponse($response);
        }, function ($items, $pagination) {
            return new Contacts($items, $pagination);
        }, 'contacts');
    }

    public function retrieve(string $id): Contact
    {
        return $this->doRetrieve(sprintf('contacts/%s', $id), function (stdClass $response) {
            return $this->createContactFromResponse($response);
        });
    }

    public function update(Contact $contact): Contact
    {
        return $this->doUpdate(sprintf('contacts/%s', $contact->getId()), $contact, function ($contact) {
            return $this->convertContactToRequest($contact);
        }, function (stdClass $response) {
            return $this->createContactFromResponse($response);
        });
    }

    public function current(): Contact
    {
        return $this->doRetrieve('contacts/current', function (stdClass $response) {
            return $this->createContactFromResponse($response);
        });
    }
}
