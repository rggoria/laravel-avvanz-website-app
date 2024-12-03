<?php

use App\Http\Controllers\Leadership\AuthController;
use App\Http\Controllers\Leadership\HomepageController;

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

// Leadership Controller
Route::get('/leadership', [HomepageController::class, 'index'])->name('leadership-home');
Route::get('/leadership/signup', [AuthController::class, 'signup'])->name('leadership-signup');
Route::get('/leadership/signup-1', [AuthController::class, 'signup1'])->name('leadership-signup-1');