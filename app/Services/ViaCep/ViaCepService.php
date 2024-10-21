<?php

declare(strict_types=1);

namespace App\Services\ViaCep;

use Illuminate\Support\Facades\Http;

class ViaCepService
{
    public static function handle(string $zipcode = ''): array
    {
        $zipcode = preg_replace('/[^A-Za-z0-9\-]/', '', $zipcode);
        $response = collect(Http::get("https://viacep.com.br/ws/{$zipcode}/json/")->json());

        if (
            !empty($response['erro'])
            || $response->isEmpty()
        ) {
            return [];
        }

        return [
            'zipcode' => $response['cep'],
            'street' => $response['logradouro'],
            'neighborhood' => $response['bairro'],
            'city' => $response['localidade'],
            'state' => $response['uf']
        ];
    }
}