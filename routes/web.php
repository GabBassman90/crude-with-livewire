<?php

use App\Livewire\Users;
use App\Livewire\User;
use App\Livewire\Create;
use App\Livewire\Edit;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', Users::class);
Route::get('/create', Create::class);
Route::get('/user/{customer}', User::class);
Route::get('/{customerId}/edit', Edit::class);