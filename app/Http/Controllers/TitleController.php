<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TitleController extends Controller
{
    public function getIndex(){
        return view('title');
    }
}
