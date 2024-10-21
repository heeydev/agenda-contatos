<?php

declare(strict_types=1);

namespace App\Actions;

use App\Models\Contact;

class ContactGetPropertiesAction
{
    public static function handle(string|int $id): array
    {
        $contact = Contact::find($id)->toArray();

        return [
            'name' => $contact['name'],
            'phone' => $contact['phone'],
            'email' => $contact['email'],
            'zipcode' => $contact['zipcode'],
            'street' => $contact['street'],
            'neighborhood' => $contact['neighborhood'],
            'city' => $contact['city'],
            'state' => $contact['state']
        ];
    }

    public static function getEmptyProperties(): array
    {
        return [
            'name' => '',
            'phone' => '',
            'email' => '',
            'zipcode' => '',
            'street' => '',
            'neighborhood' => '',
            'city' => '',
            'state' => '',
        ];
    }
}