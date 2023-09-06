<?php

use App\Livewire\RegisterUser;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('counter', App\Livewire\Counter::class);
Route::get('register', RegisterUser::class);
