<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

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
    return view('users.main');
});

Route::get('/', [UserController::class, 'index'])->name('users.index');
Route::post('/', [UserController::class, 'store'])->name('users.store');
Route::delete('/{userId}', [UserController::class, 'destroy'])->name('users.destroy');
Route::patch('/{userId}', [UserController::class, 'update'])->name('users.update');
Route::get('/{userId}/edit', [UserController::class, 'edit'])->name('users.edit');
