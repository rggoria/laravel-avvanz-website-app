<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DevelopController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ResourcesController;
use App\Http\Controllers\ScreenController;
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

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/contact-us', [PagesController::class, 'contact'])->name('contact');
Route::get('/global', [PagesController::class, 'global'])->name('global');

// About Us Controller
Route::get('/about-us', [AboutController::class, 'index'])->name('about-main');
Route::get('/workplace-safety-and-health-guideline', [AboutController::class, 'workplaceSafety'])->name('about-1');
Route::get('/environmental-social-and-governance', [AboutController::class, 'environmental'])->name('about-2');
Route::get('/join-avvanz', [AboutController::class, 'careers'])->name('about-3');

// Sceen Controller
Route::get('/screen', [ScreenController::class, 'index'])->name('screen-main');
Route::get('/background-screening', [ScreenController::class, 'backgroundScreening'])->name('screen-1');
Route::get('/why-avvanz-screen', [ScreenController::class, 'avvanzScreen'])->name('screen-sub-1');
Route::get('/background-check', [ScreenController::class, 'backgroundCheck'])->name('screen-sub-2');
Route::get('/avvanz-screenglobal', [ScreenController::class, 'avvanzSreenGlobal'])->name('screen-sub-3');
Route::get('/process', [ScreenController::class, 'process'])->name('screen-sub-4');
Route::get('/kyc-aml-compliance', [ScreenController::class, 'kyc'])->name('screen-sub-5');
Route::get('/screen-chain', [ScreenController::class, 'screenChain'])->name('screen-2');
Route::get('/singapore-work-passes', [ScreenController::class, 'singaporeWork'])->name('screen-3');
Route::get('/company-due-diligence', [ScreenController::class, 'companyDue'])->name('screen-4');
Route::get('/partnership-integration', [ScreenController::class, 'partnership'])->name('screen-5');

// Develop Controller
Route::get('/develop', [DevelopController::class, 'index'])->name('develop-main');
Route::get('/star-trainers', [DevelopController::class, 'star'])->name('develop-1');
Route::get('/learnglobal', [DevelopController::class, 'learnGlobal'])->name('develop-2');
Route::get('/revision-nibble-learn', [DevelopController::class, 'nibble'])->name('develop-3');

// Resources Controller
Route::get('/blog', [ResourcesController::class, 'blog'])->name('resources-1');
Route::get('/industry', [ResourcesController::class, 'industry'])->name('resources-2');
Route::get('/conference', [ResourcesController::class, 'webinar'])->name('resources-3');
Route::get('/press-and-media', [ResourcesController::class, 'press'])->name('resources-4');