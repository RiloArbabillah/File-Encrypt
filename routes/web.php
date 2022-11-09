<?php

use App\Http\Controllers\FilesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('files')->name('files.')->group(function() {
    Route::get('/', [FilesController::class, 'index'])->name('index');
    Route::get('/create', [FilesController::class, 'create'])->name('create');
    Route::post('/', [FilesController::class, 'store'])->name('store');
    Route::get('/{files}/show', [FilesController::class, 'show'])->name('show');
    Route::get('/{files}/edit', [FilesController::class, 'edit'])->name('edit');
    Route::put('/{files}', [FilesController::class, 'update'])->name('update');
    Route::delete('/{files}', [FilesController::class, 'destroy'])->name('destroy');
});