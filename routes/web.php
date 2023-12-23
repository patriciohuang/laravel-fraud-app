<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ScansController;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('scans', [ScansController::class, 'viewAllScans'])
    ->name('scans');

Route::get('scans/{id}', [ScansController::class, 'viewScan'])
    ->name('scan-detail');

Route::post('scans', [ScansController::class, 'createScan'])
    ->name('create-scan');