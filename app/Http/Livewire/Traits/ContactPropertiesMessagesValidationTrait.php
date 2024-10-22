<?php

declare(strict_types=1);

namespace App\Http\Livewire\Traits;

trait ContactPropertiesMessagesValidationTrait
{
    protected array $messages = [
        'data.name.required' => 'O campo NOME é obrigatório.',
        'data.name.max' => 'O campo NOME não pode ultrapassar 255 caracteres.',
        'data.phone.required' => 'O campo TELEFONE é obrigatório.',
        'data.phone.max' => 'O campo TELEFONE não pode ultrapassar 255 caracteres.',
        'data.phone.regex' => 'O TELEFONE informado é inválido.',
        'data.email.required' => 'O campo E-MAIL é obrigatório.',
        'data.email.max' => 'O campo E-MAIL não pode ultrapassar 255 caracteres.',
        'data.email.email' => 'O E-MAIL informado é inválido.',
        'data.zipcode.required' => 'O campo CEP é obrigatório.',
        'data.zipcode.max' => 'O campo CEP não pode ultrapassar 255 caracteres.',
        'data.street.required' => 'O campo LOGRADOURO é obrigatório.',
        'data.street.max' => 'O campo LOGRADOURO não pode ultrapassar 255 caracteres.',
        'data.neighborhood.required' => 'O campo BAIRRO é obrigatório.',
        'data.neighborhood.max' => 'O campo BAIRRO não pode ultrapassar 255 caracteres.',
        'data.city.required' => 'O campo LOCALIDADE é obrigatório.',
        'data.city.max' => 'O campo LOCALIDADE não pode ultrapassar 255 caracteres.',
        'data.state.required' => 'O campo UF é obrigatório.',
        'data.state.max' => 'O campo UF não pode ultrapassar 2 caracteres.',
    ];
}