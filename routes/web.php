<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DevelopController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PrivacyController;
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

// Homepage Controller
Route::get('/', [HomepageController::class, 'index'])->name('home');
Route::get('/cookie-policy', [HomepageController::class, 'cookie'])->name('cookie');
Route::get('/ethics-anti-bribery-and-corruption', [HomepageController::class, 'ethics'])->name('ethics');
Route::get('/general-information-security-policy', [HomepageController::class, 'general'])->name('general');
Route::get('/global', [HomepageController::class, 'global'])->name('global');

// About Us Controller
Route::get('/about-us', [AboutController::class, 'index'])->name('about-main');
Route::get('/workplace-safety-and-health-guideline', [AboutController::class, 'workplaceSafety'])->name('about-1');
Route::get('/environmental-social-and-governance', [AboutController::class, 'environmental'])->name('about-2');
Route::get('/join-avvanz', [AboutController::class, 'careers'])->name('about-3');
Route::post('/join-avvanz', [AboutController::class, 'send'])->name('about-3-send');

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
Route::get('/learnglobal/load-more', [DevelopController::class, 'loadMoreItems']);
Route::post('/learnglobal', [DevelopController::class, 'send'])->name('develop-2-send');
Route::get('/revision-nibble-learn', [DevelopController::class, 'nibble'])->name('develop-3');

// Resources Controller
Route::get('/blog', [ResourcesController::class, 'blog'])->name('resources-1');
Route::get('/industry', [ResourcesController::class, 'industry'])->name('resources-2');
Route::get('/conference', [ResourcesController::class, 'webinar'])->name('resources-3');
Route::get('/press-and-media', [ResourcesController::class, 'press'])->name('resources-4');

// Contact Controller
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact');
Route::post('/contact-us', [ContactController::class, 'send'])->name('contact-send');
Route::get('/request-form-ibc', [ContactController::class, 'request'])->name('request-ibc');
Route::get('/request-form-wrbc', [ContactController::class, 'request'])->name('request-wrbc');
Route::get('/request-form-cdd', [ContactController::class, 'request'])->name('request-cdd');
Route::get('/request-form-lte', [ContactController::class, 'request'])->name('request-lte');
Route::post('/request-form', [ContactController::class, 'requestSend'])->name('request-send');


// Privacy Controller
Route::get('/privacy-policy', [PrivacyController::class, 'index'])->name('privacy-main');
Route::get('/privacy-policy-candidate-philippines', [PrivacyController::class, 'philippines'])->name('privacy-1');
Route::get('/privacy-policy-candidate-autralia', [PrivacyController::class, 'australia'])->name('privacy-2');
Route::get('/privacy-policy-candidate-singapore', [PrivacyController::class, 'singapore'])->name('privacy-3');
Route::get('/privacy-policy-candidate-united-states-of-america', [PrivacyController::class, 'usa'])->name('privacy-4');
Route::get('/privacy-policy-candidate-united-kingdom', [PrivacyController::class, 'uk'])->name('privacy-5');