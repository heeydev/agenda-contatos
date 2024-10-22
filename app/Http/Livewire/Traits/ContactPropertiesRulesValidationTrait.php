<?php

declare(strict_types=1);

namespace App\Http\Livewire\Traits;

trait ContactPropertiesRulesValidationTrait
{
    /**
     * Regras das propriedades dos contatos e endereços
    */
    protected array $rules = [
        'data.name' => ['required', 'max:255'],
        'data.phone' => ['required', 'max:255', 'regex:/\(?\d{2}\)?\s?\d{5}\-?\d{4}/'],
        'data.email' => ['required', 'max:255', 'email'],
        'data.zipcode' => ['required', 'max:255'],
        'data.street' => ['required', 'max:255'],
        'data.neighborhood' => ['required', 'max:255'],
        'data.city' => ['required', 'max:255'],
        'data.state' => ['required', 'max:2'],
    ];
}