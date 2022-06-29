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

// todo どこのURLにアクセスした時、なんの処理をするかをまとめるためのルーティングを書く。その場所がroutes/web.phpである
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::post('/', 'App\Http\Controllers\PagesController@save');
