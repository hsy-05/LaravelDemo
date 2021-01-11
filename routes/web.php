<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InspiringController;
use Illuminate\Support\Facades\Auth;
use App\Models\Subject;      //////////////////


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

Route::get('/w_co', 'App\Http\Controllers\HomeController@index4')->name('wo_co');

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index3'])->name('new');
// Route::get('/admin', 'App\Http\Controllers\PostController@index')->name('new');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function() {
    Route::resource('posts', 'App\Http\Controllers\PostController');   ////////要打全名
    Route::resource('products', 'App\Http\Controllers\ProductsController');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index2'])->name('home');


Route::get('/cart', 'CartController@index')->name('cart.index');

Route::get('/inspire', 'App\Http\Controllers\InspiringController@inspire');

 Route::get('/sub1', function(){

    $post = new App\Models\Subject;
     $post->name = 'computer';
     $post->save();
     return $post;

 });

 Route::get('/sub2', function(){

    $post = new App\Models\Subject;
     $post->name = 'network';
     $post->save();
     return $post;

 });

 Route::get('/get1', function(){

    $subject = Subject::find(1);
    $posts = $subject->posts;
    return $posts;

});
Auth::routes();

Route::get('/check', function(){

    var_dump(Auth::check());

});

Route::get('/user', function(){

    echo Auth::user();

});


