<?php

declare(strict_types=1);

namespace App\Http\Livewire\Traits;

trait ContactPropertiesRulesValidationTrait
{
    protected array $rules = [
        'data.name' => ['required', 'max:255'],
        'data.phone' => ['required', 'max:255'],
        'data.email' => ['required', 'max:255'],
        'data.zipcode' => ['required', 'max:255'],
        'data.street' => ['required', 'max:255'],
        'data.neighborhood' => ['required', 'max:255'],
        'data.city' => ['required', 'max:255'],
        'data.state' => ['required', 'max:2'],
    ];
}