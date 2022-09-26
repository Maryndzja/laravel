<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Models\Catalog;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //View::composer('layouts.app', 'App\Providers\ViewComposers\AppComposer');
        View::composer('layouts.app', function(\Illuminate\Contracts\View\View $view){
            $parents=Catalog::whereNull('parent_id')->get();
            $view->with('parents', $parents);
        });
    }
}
