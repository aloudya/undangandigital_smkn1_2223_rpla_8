<?php

use App\Http\Controllers\UndanganController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/undangan')->group(function () {
    Route::get('/', [UndanganController::class, 'index'])->name('undangan.index');
    Route::get('/data', [UndanganController::class, 'dataUndangan'])->name('undangan.data');
});
