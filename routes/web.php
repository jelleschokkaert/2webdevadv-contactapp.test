<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AddController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\StoreController;

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('contacts.index');
    Route::get('/add', [AddController::class, 'add'])->name('contacts.add');
    Route::get('/edit/{id}', [UpdateController::class, 'update'])->name('contacts.edit');
    Route::post('/delete/{id}', [DeleteController::class, 'delete'])->name('contacts.delete');

    Route::post('/store/{id?}', [StoreController::class, 'store'])->name('contacts.store');
});
