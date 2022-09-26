<?php

namespace App\Providers;

use View;
use App\Model\Catalog;
class ViewServiceProvider extends ServiceProvider;
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //View::composer('layouts.app', 'App\Providers\ViewComposers\AppComposer');
        View::composer('layouts.app', function(){
            $parents=Catalog::whereNull('parent_id')->get();
            $view->with('parents', $parents);
        });
    }
}

// продублировать строчку и будет другой файл шаблона и другой класс. она подключена как провайдер
// если в другие шаблоны передавать переменные - то здесь делать строку и другие ...
