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

Route::get('/', [\App\Http\Controllers\AccueilController::class, 'index'])->name('accueil');

// prefix toutes les urls du groupe par /app/
Route::prefix('app')->name('app.')->group(function () {

    Route::get('/formations', [\App\Http\Controllers\FormationController::class, 'index'])
        ->name('formations');
    Route::post('/formations', [\App\Http\Controllers\FormationController::class, 'createFormation'])
        ->name('createF');
    Route::get('/apprenants', [\App\Http\Controllers\ApprenantController::class, 'index'])
        ->name('apprenants');
    Route::post('/apprenants', [\App\Http\Controllers\ApprenantController::class, 'createApprenant'])
        ->name('createA');


})->name('app');

