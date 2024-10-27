<?php

declare(strict_types=1);

namespace App\Actions;

use App\Models\Contact;

class ContactStoreAction
{
    /**
     * Armazena as informações do contato
     *
     * @param array $data Array com as nformações do contato a serem armazenadas
     */
    public static function save(array $data): void
    {
        Contact::updateOrCreate(
            [
                'zipcode' => $data['zipcode'],
            ],
            [
                'name' => $data['name'],
                'phone' => $data['phone'],
                'email' => $data['email'],
                'street' => $data['street'],
                'neighborhood' => $data['neighborhood'],
                'city' => $data['city'],
                'state' => $data['state'],
            ]
        );
    }
}