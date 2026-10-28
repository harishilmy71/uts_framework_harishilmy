
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LandingController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

// Route Admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/advance-sweet-alert', [AdminController::class, 'advanceSweetAlert']);
    Route::get('/auth-login', [AdminController::class, 'authLogin']);
    Route::get('/calendar', [AdminController::class, 'calendar']);
    Route::get('/form-elements', [AdminController::class, 'formElements']);
    Route::get('/tables-datatable', [AdminController::class, 'tablesDatatable']);
});

// Route Landing Page
Route::prefix('landing')->name('landing.')->group(function () {
    Route::get('/', [LandingController::class, 'index'])->name('index');
    Route::get('/about', [LandingController::class, 'about']);
    Route::get('/booking', [LandingController::class, 'booking']);
    Route::get('/menu', [LandingController::class, 'menu']);
    Route::get('/service', [LandingController::class, 'service']);
    Route::get('/team', [LandingController::class, 'team']);
});
