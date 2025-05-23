<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SantriController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');




Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('register.store');


// CRUD SANTRI
Route::middleware(['auth'])->group(function() {

Route::get('/santri', [SantriController::class, 'index'])->name('santri.index');
Route::get('/santri/create', [SantriController::class, 'create'])->name('santri.create');
Route::post('/santri', [SantriController::class, 'store'])->name('santri.store');
Route::get('/santri/{id}/edit', [SantriController::class, 'edit'])->name('santri.edit');
Route::put('/santri/{id}', [SantriController::class, 'update'])->name('santri.update');
Route::delete('/santri/{id}', [SantriController::class, 'destroy'])->name('santri.destroy');
});