<?php

use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'index']);
Route::get('/about-us', [PagesController::class, 'aboutUs']);
Route::get('/workplace-safety-and-health-guideline', [PagesController::class, 'workplaceSafety']);
Route::get('/environmental-social-and-governance', [PagesController::class, 'environmental']);
Route::get('/join-avvanz', [PagesController::class, 'careers']);
Route::get('/screen', [PagesController::class, 'screen']);
Route::get('/background-screening', [PagesController::class, 'backgroundScreening']);
Route::get('/why-avvanz-screen', [PagesController::class, 'avvanzScreen']);
Route::get('/background-check', [PagesController::class, 'backgroundCheck']);
Route::get('/avvanz-screenglobal', [PagesController::class, 'avvanzSreenGlobal']);
Route::get('/process', [PagesController::class, 'process']);
Route::get('/kyc-aml-compliance', [PagesController::class, 'kyc']);
Route::get('/screen-chain', [PagesController::class, 'screenChain']);
Route::get('/singapore-work-passes', [PagesController::class, 'singaporeWork']);