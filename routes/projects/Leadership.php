<?php

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
Route::get('/leadership/itinerary', [HomepageController::class, 'itinerary'])->name('leadership-itinerary');
Route::get('/leadership/register', [HomepageController::class, 'register'])->name('leadership-register');
Route::post('/leadership/register', [HomepageController::class, 'registerLeadership']);