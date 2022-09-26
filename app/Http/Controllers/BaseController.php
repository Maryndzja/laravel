<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class BaseController extends Controller
{
    public function getIndex(){

        return view('welcome');
       }
}
