<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HealthResourcesController;
use App\Http\Controllers\HealthTipsController;
use App\Http\Controllers\DiseasePreventionController;
use App\Http\Controllers\WellnessGuideController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\HospitalController;
use App\Http\Controllers\Admin\SpecialityController;
use App\Http\Controllers\Admin\PhotoGalleryController;
use App\Http\Controllers\Admin\ServiceCountController;
use App\Http\Controllers\Admin\FAQController as AdminFAQController;
use App\Http\Controllers\Admin\ContentController;

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::post('/contacttable2/submit', [ContactController::class, 'contacttable2Submit'])->name('contacttable2.submit');

// Resource Pages
Route::get('/health-resources', [HealthResourcesController::class, 'index'])->name('health-resources');
Route::get('/health-tips', [HealthTipsController::class, 'index'])->name('health-tips');
Route::get('/disease-prevention', [DiseasePreventionController::class, 'index'])->name('disease-prevention');
Route::get('/wellness-guide', [WellnessGuideController::class, 'index'])->name('wellness-guide');
Route::get('/faq', [FAQController::class, 'index'])->name('faq');

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
        
        // FAQs CRUD
        Route::resource('faqs', AdminFAQController::class);
        
        // Content Management
        Route::get('/content', [ContentController::class, 'index'])->name('content.index');
        Route::get('/content/{pageSlug}', [ContentController::class, 'show'])->name('content.show');
        Route::put('/content/{pageSlug}', [ContentController::class, 'update'])->name('content.update');
    });
});
