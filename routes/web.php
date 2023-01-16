<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\VillaController;
use \App\Http\Controllers\LocationController;
use \App\Http\Controllers\TypeController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'villas'], function () {
    Route::get('/', [VillaController::class, 'index'])->name('villa.index');
    Route::get('/create', [VillaController::class, 'create'])->name('villa.create');
    Route::post('/', [VillaController::class, 'store'])->name('villa.store');
    Route::get('edit/{id}', [VillaController::class, 'edit'])->name('villa.edit');
    Route::put('update/{id}', [VillaController::class, 'update'])->name('villa.update');
    Route::delete('/delete/{id}', [VillaController::class, 'delete'])->name('villa.delete');
});

Route::group(['prefix' => 'locations'], function () {
    Route::get('/', [LocationController::class, 'index'])->name('locations.index');
    Route::get('/create', [LocationController::class, 'create'])->name('locations.create');
    Route::post('/', [LocationController::class, 'store'])->name('locations.store');
    Route::get('edit/{id}', [LocationController::class, 'edit'])->name('locations.edit');
    Route::put('update/{id}', [LocationController::class, 'update'])->name('locations.update');
    Route::delete('/delete/{id}', [LocationController::class, 'delete'])->name('locations.delete');
});

Route::group(['prefix' => 'type'], function () {
    Route::get('/', [TypeController::class, 'index'])->name('type.index');
    Route::get('/create', [TypeController::class, 'create'])->name('type.create');
    Route::post('/', [TypeController::class, 'store'])->name('type.store');
    Route::get('edit/{id}', [TypeController::class, 'edit'])->name('type.edit');
    Route::put('update/{id}', [TypeController::class, 'update'])->name('type.update');
    Route::delete('/delete/{id}', [TypeController::class, 'delete'])->name('type.delete');
});
