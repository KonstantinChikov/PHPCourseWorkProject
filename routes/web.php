<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\LocationController;
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


Route::group(['prefix' => 'house_location'], function () {
    Route::get('/', [LocationController::class, 'index'])->name('house_location.index');
    Route::get('/create', [LocationController::class, 'create'])->name('house_location.create');
    Route::post('/', [LocationController::class, 'store'])->name('house_location.store');
    Route::get('edit/{id}', [LocationController::class, 'edit'])->name('house_location.edit');
    Route::put('update/{id}', [LocationController::class, 'update'])->name('house_location.update');
    Route::delete('/delete/{id}', [LocationController::class, 'delete'])->name('house_location.delete');
});
