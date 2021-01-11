<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InspiringController;
use Illuminate\Support\Facades\Auth;
use App\Models\Subject;      //////////////////
use App\Http\Controllers\UserController;
use App\Models\User;

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
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('firstHome');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index2'])->name('home');

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index3'])->name('new');

Route::get('/w_co', 'App\Http\Controllers\HomeController@index4')->name('wo_co');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function() {
    Route::resource('posts', 'App\Http\Controllers\PostController');   ////////要打全名
    Route::resource('products', 'App\Http\Controllers\ProductsController');
});


Route::get('/cart', 'CartController@index')->name('cart.index');

Auth::routes();
