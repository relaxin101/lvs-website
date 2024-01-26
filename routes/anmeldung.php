<?php

use App\Http\Controllers\AnmeldungController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/anmeldung', function () {
    return Inertia::render('TeilnehmerAnmeldung/Anmeldung');
})->name('anmeldung_website');


Route::post('/anmeldung', [AnmeldungController::class, 'store'])->name('anmeldung_form');
