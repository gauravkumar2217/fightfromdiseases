<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\HospitalController;
use App\Http\Controllers\Admin\SpecialityController;
use App\Http\Controllers\Admin\PhotoGalleryController;
use App\Http\Controllers\Admin\ServiceCountController;

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::post('/contacttable2/submit', [ContactController::class, 'contacttable2Submit'])->name('contacttable2.submit');

// Admin Authentication Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
    
    // Protected Admin Routes
    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('/contacts', [AdminController::class, 'contacts'])->name('contacts');
        Route::get('/contacts/{id}', [AdminController::class, 'getContactDetails'])->name('contacts.details');
        Route::get('/contacts-export', [AdminController::class, 'exportContacts'])->name('contacts.export');
        Route::get('/settings', [\App\Http\Controllers\Admin\SettingsController::class, 'index'])->name('settings');
        Route::post('/settings', [\App\Http\Controllers\Admin\SettingsController::class, 'update'])->name('settings.update');
        Route::post('/settings/{key}', [\App\Http\Controllers\Admin\SettingsController::class, 'updateSingle'])->name('settings.update-single');
        Route::get('/banner', [\App\Http\Controllers\Admin\BannerController::class, 'index'])->name('banner');
        Route::post('/banner', [\App\Http\Controllers\Admin\BannerController::class, 'update'])->name('banner.update');
        
        // Hospitals CRUD
        Route::resource('hospitals', HospitalController::class);
        
        // Specialities CRUD
        Route::resource('specialities', SpecialityController::class);
        
        // Photo Gallery CRUD
        Route::resource('photo-gallery', PhotoGalleryController::class);
        
        // Service Counts CRUD
        Route::resource('service-counts', ServiceCountController::class);
    });
});
