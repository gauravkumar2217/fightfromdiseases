<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Setting;
use App\Models\Content;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Share a helper function to get settings in views
        View::share('getSetting', function ($key, $default = null) {
            return Setting::get($key, $default);
        });

        // Share a helper function to get content in views
        View::share('getContent', function ($pageSlug, $key, $default = null) {
            return Content::get($pageSlug, $key, $default);
        });
    }
}
