<?php

use App\Http\Controllers\AnmeldungController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| LVS Anmeldung Routes
|--------------------------------------------------------------------------
|
*/


Route::get('/anmeldung', function () {
    return Inertia::render('TeilnehmerAnmeldung/Anmeldung');
})->name('anmeldung_website');


Route::post('/anmeldung', [AnmeldungController::class, 'store'])->name('anmeldung_form');
