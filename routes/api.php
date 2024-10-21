<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::apiResource('contatos', 'App\Http\Controllers\Api\ContactController');