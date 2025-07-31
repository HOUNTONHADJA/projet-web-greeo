<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

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
        //
            Carbon::setLocale(App::getLocale()); // prend la locale 'fr' de config/app.php

        Paginator::useBootstrap(); // Activation de la pagination boostrap
        Paginator::useTailwind();

        View::composer('*', function ($view) {
        $unreadCount = 0;

        if (Auth::check()) {
            $user = Auth::user(); // Ou Auth::guard('admin')->user() si tu utilises un guard admin
            $unreadCount = $user->unreadNotifications->count();
        }

        $view->with('unreadCount', $unreadCount);
    });
    }
}
