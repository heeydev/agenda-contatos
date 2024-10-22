<?php

use App\Http\Livewire\SearchContact;
use Illuminate\Support\Facades\Route;



Route::get('/cadastro', action:SearchContact::class)->name('search-contact');