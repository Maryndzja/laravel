<?php

namespace App\Providers\ViewComposer;

use Illuminate\Contracts\View\View;
use App\Model\Catalog;

class AppComposer{
    public function compose(View $view){
        $parents=Catalog::whereNull('parent_id')->get();
        $view->with('parents', $parents);
    }
}