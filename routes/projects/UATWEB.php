<?php

use App\Http\Controllers\UATWEB\AboutController;
use App\Http\Controllers\UATWEB\ContactController;
use App\Http\Controllers\UATWEB\DevelopController;
use App\Http\Controllers\UATWEB\HomepageController;
use App\Http\Controllers\UATWEB\PrivacyController;
use App\Http\Controllers\UATWEB\ResourcesController;
use App\Http\Controllers\UATWEB\ScreenController;

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
Route::get('/singapore', [HomepageController::class, 'global'])->name('global-singapore');
Route::get('/australia', [HomepageController::class, 'global'])->name('global-australia');
Route::get('/ph', [HomepageController::class, 'global'])->name('global-ph');
// Route::get('/india', [HomepageController::class, 'global'])->name('global-india');
Route::get('/usa', [HomepageController::class, 'global'])->name('global-usa');
Route::get('/latin-america', [HomepageController::class, 'global'])->name('global-latin-america');
Route::get('/uae', [HomepageController::class, 'global'])->name('global-uae');
Route::get('/uk', [HomepageController::class, 'global'])->name('global-uk');

// About Us Controller
Route::get('/about-us', [AboutController::class, 'index'])->name('about-main');
Route::get('/about-us/{title}', [AboutController::class, 'aboutUsItem'])->name('aboutUsItem');
Route::get('/workplace-safety-and-health-guideline', [AboutController::class, 'workplaceSafety'])->name('about-1');
Route::get('/environmental-social-and-governance', [AboutController::class, 'environmental'])->name('about-2');
Route::get('/environmental-social-and-governance/{title}', [AboutController::class, 'environmentalItem1'])->name('environmentalItem1');
Route::get('/pages', [AboutController::class, 'pages'])->name('pages');
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
Route::get('/partnership-integration/{title}', [ScreenController::class, 'partnershipItem'])->name('partnershipItem');

// Develop Controller
Route::get('/develop', [DevelopController::class, 'index'])->name('develop-main');
Route::get('/develop/{title}', [DevelopController::class, 'trainingItems'])->name('trainingItems');
Route::get('/star-trainers', [DevelopController::class, 'star'])->name('develop-1');
Route::get('/learnglobal', [DevelopController::class, 'learnGlobal'])->name('develop-2');
Route::get('/learnglobal/load-more', [DevelopController::class, 'loadMoreItems']);
Route::post('/learnglobal', [DevelopController::class, 'send'])->name('develop-2-send');
Route::get('/revision-nibble-learn', [DevelopController::class, 'nibble'])->name('develop-3');

// Resources Controller
Route::get('/blog', [ResourcesController::class, 'blog'])->name('resources-1');
Route::get('/blog/{title}', [ResourcesController::class, 'blogItem'])->name('blogItem');
Route::get('/newsletter', [ResourcesController::class, 'newsletter'])->name('resources-2');
Route::get('/newsletter/{title}', [ResourcesController::class, 'newsletterItem'])->name('newsletterItem');
Route::get('/industry', [ResourcesController::class, 'industry'])->name('resources-3');
Route::get('/industry/{title}', [ResourcesController::class, 'industryItem'])->name('industryItem');
Route::get('/conference', [ResourcesController::class, 'webinar'])->name('resources-4');
Route::get('/conference/{title}', [ResourcesController::class, 'webinarItem'])->name('webinarItem');
Route::get('/press-and-media', [ResourcesController::class, 'press'])->name('resources-5');
Route::get('/press-and-media/{title}', [ResourcesController::class, 'pressItem'])->name('pressItem');

// Contact Controller
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact');
Route::post('/contact-us', [ContactController::class, 'send'])->name('contact-send');
Route::get('/request-form-ibc', [ContactController::class, 'request'])->name('request-ibc');
Route::get('/request-form-wrbc', [ContactController::class, 'request'])->name('request-wrbc');
Route::get('/request-form-cdd', [ContactController::class, 'request'])->name('request-cdd');
Route::get('/request-form-lte', [ContactController::class, 'request'])->name('request-lte');
Route::post('/request-form', [ContactController::class, 'requestSend'])->name('request-send');
Route::get('/contact-us-australia', [ContactController::class, 'contactUsAustralia'])->name('contact-us-australia');
Route::post('/submit-contact-us-australia', [ContactController::class, 'submitContactUsAustralia'])->name('submit-contact-us-australia');


// Privacy Controller
Route::get('/privacy-policy', [PrivacyController::class, 'index'])->name('privacy-main');
Route::get('/privacy-policy-candidate-philippines', [PrivacyController::class, 'philippines'])->name('privacy-1');
Route::get('/privacy-policy-candidate-autralia', [PrivacyController::class, 'australia'])->name('privacy-2');
Route::get('/privacy-policy-candidate-singapore', [PrivacyController::class, 'singapore'])->name('privacy-3');
Route::get('/privacy-policy-candidate-united-states-of-america', [PrivacyController::class, 'usa'])->name('privacy-4');
Route::get('/privacy-policy-candidate-united-kingdom', [PrivacyController::class, 'uk'])->name('privacy-5');


// Testing only
Route::get('/testing', [HomepageController::class, 'testing'])->name('testing');