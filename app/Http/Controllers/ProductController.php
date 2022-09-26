<?php

namespace App\Http\Controllers;

use App\Model\Catalog;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getOne(Product $product){
        return view('product', compact('product'));
    }
}
