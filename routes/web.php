<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('products')->group(function() {

    Route::get('', 'App\Http\Controllers\ProductController@index')->name('product.index');
    Route::get('create', 'App\Http\Controllers\ProductController@create')->name('product.create');
    Route::post('store', 'App\Http\Controllers\ProductController@store' )->name('product.store');
    Route::get('edit/{product}', 'App\Http\Controllers\ProductController@edit')->name('product.edit');
    //Route::post('update/{articleImage}', 'App\Http\Controllers\ArticleImageController@update')->name('articleimage.update');
    //Route::post('destroy/{client}', 'App\Http\Controllers\ClientController@destroy' )->name('client.destroy');
    //Route::get('show/{client}', 'App\Http\Controllers\ClientController@show')->name('client.show');

});