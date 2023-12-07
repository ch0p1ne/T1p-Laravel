<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\AccueilController::class, 'index']);

// prefix toutes les urls du groupe par /app/
Route::prefix('app')->group(function () {

    Route::get('/formations', [\App\Http\Controllers\FormationController::class, 'index'])
        ->name('formations');
    Route::get('/apprenants', [\App\Http\Controllers\ApprenantController::class, 'index'])
        ->name('apprenants');


})->name('app');

