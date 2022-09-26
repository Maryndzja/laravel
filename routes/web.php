<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::resource('catalog', App\Http\Controllers\CatalogController::class);
Route::get('/product/{product}', [Controllers\ProductController::class, 'getOne']);
Route::get('/', [Controllers\BaseController::class, 'getIndex']); 

Auth::routes();

Route::resource('/catalog', App\Http\Controllers\CatalogController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home', [App\Http\Controllers\HomeController::class, 'postIndex']);
Route::get('/home/product/{product}/delete', [Controllers\HomeController::class, 'getdelete']);
Route::get('/user/{id}', function ($id) {
    return new UserResource(User::findOrFail($id));
});
Route::get('/gallery', [App\Http\Controllers\GalleryController::class, 'getIndex']);
Route::get('/clients', [App\Http\Controllers\ClientsController::class, 'getIndex']);
Route::get('/college', [App\Http\Controllers\CollegeController::class, 'getIndex']);
Route::get('/title', [App\Http\Controllers\TitleController::class, 'getIndex']);
Route::get('/receipe', [App\Http\Controllers\ReceipeController::class, 'getIndex']);






// всегда последний маршрут, после него ничего не писать!!!
Route::get('{url}', [Controllers\MaintextController::class, 'getIndex']);

