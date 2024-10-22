<?php

declare(strict_types=1);

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Retorna todos os contatos cadastrados em formato JSON
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Contact::all();
    }
}
