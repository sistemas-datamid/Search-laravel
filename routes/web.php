<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\pages\ClientDetail;
use App\Livewire\pages\ClientImport;


Route::get('', ClientImport::class)->name('client');
Route::get('/client/{id}', ClientDetail::class)->name('client-details');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
