<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| All routes are defined here and loaded by the RouteServiceProvider.
| Laravel 12 uses bootstrap/app.php for route loading.
|
| Middleware applied globally:
|   - web (sessions, CSRF, cookies)
|   - SecurityHeaders (applied via bootstrap/app.php – TODO)
|
| Routes defined:
|   GET  /        HomeController@index   – Landing page
|   POST /quote   QuoteController@store  – Quote form submission
|
| TODO:
|   - Register SecurityHeaders middleware in bootstrap/app.php
|   - Add rate-limiting to POST /quote (throttle:10,1 – 10 requests/min)
|   - Add named route for GET / → 'home' if needed for redirects
|   - Add future routes: /products, /services, /about, /articles/{slug}
|
*/

/*
|--------------------------------------------------------------------------
| Landing Page
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| Quote Form Submission
|--------------------------------------------------------------------------
| Rate-limited to prevent abuse. Uncomment throttle once tested.
|
*/
use App\Http\Controllers\BrochureController;
use App\Http\Controllers\NewsletterController;

Route::post('/quote', [QuoteController::class, 'store'])
    ->name('quote.store')
    ->middleware('throttle:5,1');

/*
|--------------------------------------------------------------------------
| Newsletter Subscription Route
|--------------------------------------------------------------------------
*/
Route::post('/newsletter', [NewsletterController::class, 'subscribe'])
    ->name('newsletter.subscribe')
    ->middleware('throttle:5,1');

/*
|--------------------------------------------------------------------------
| Secure PDF Brochure Download
|--------------------------------------------------------------------------
*/
Route::get('/download-brochure', [BrochureController::class, 'download'])
    ->name('brochure.download')
    ->middleware('throttle:10,1');
