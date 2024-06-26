<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Welcome route
Route::get('/', function () {
    return view('welcome');
});

// Authentication routes
Auth::routes();

// Dashboard route with auth middleware
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

// Optional: Redirect '/home' to '/dashboard'
Route::get('/home', function() {
    return redirect()->route('dashboard');
})->name('home');
