<?php

use App\Http\Controllers\Public\PublicController;
use App\Http\Controllers\Public\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', WelcomeController::class);

Route::controller(PublicController::class)->group(function () {
    Route::get('/about-us', 'aboutUs')->name('about-us');
    Route::get('/portfolio', 'portfolio')->name('portfolio');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/feedback', 'feedback')->name('feedback');
});

Route::get('dashboard',function(){
    return "dashboard";
})->name('user.dashboard');

Route::get('Caregiver/login',function(){
    return "Login";
})->name('caregiver.login');

require __DIR__ . '/auth.php';
