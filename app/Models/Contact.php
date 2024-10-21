<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'zipcode',
        'street',
        'neighborhood',
        'city',
        'state',
    ];
}
