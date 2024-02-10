<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ScoringGuideController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqsController;
use App\Http\Controllers\RankCalculatorController;
use App\Http\Controllers\PricingController;

Route::get('/', [IndexController::class, 'index']);
Route::get('product', [ProductController::class, 'index']);
Route::get('/product/{id?}', [ProductController::class, 'byid']);
Route::get('scoringguide', [ScoringGuideController::class, 'index']);
Route::get('about', [AboutController::class, 'index']);
Route::get('contact', [ContactController::class, 'index']);
Route::get('faqs', [FaqsController::class, 'index']);
Route::get('rankcalculator', [RankCalculatorController::class, 'index']);
Route::get('pricing', [PricingController::class, 'index']);
