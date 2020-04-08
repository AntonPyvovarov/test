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

Route::group(['namespace'=>'Category'],function (){
    Route::resource('categories','CategoryController');
});

Route::group(['namespace'=>'Product'],function (){
    Route::resource('products','ProductController');
});

Route::get('prod-cat/{$id}','Product\SortController@index');
