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

// prefix toutes les urls du groupe par /app/
Route::prefix('app')->group(function () {

    Route::get('/formations', [\App\Http\Controllers\FormationController::class, 'index'])->name('formation');


});

