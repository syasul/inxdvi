<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        if (!app()->runningInConsole()) {
            try {
                if (\Illuminate\Support\Facades\Schema::hasTable('settings')) {
                    $settingsRaw = \App\Models\Setting::all();
                    $settings = [];
                    foreach ($settingsRaw as $setting) {
                        $settings[$setting->key] = $setting->value;
                    }
                    \Illuminate\Support\Facades\View::share('settings', $settings);
                }
            } catch (\Exception $e) {
                // Prevent crash during migrations
            }
        }
    }
}
