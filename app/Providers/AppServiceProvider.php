<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
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
       $path = storage_path('app/adminmenu.json');

    if (file_exists($path)) {
        $json = file_get_contents($path);
        $menuData = json_decode($json, true);
    }

   
    View::share('adminMenu', $menuData);

 View::composer('*', function ($view) {
        $user = Auth::user();
        
        $view->with('user', $user);
    });






    }
}
