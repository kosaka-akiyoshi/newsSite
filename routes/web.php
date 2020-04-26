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

//Route::get('/', function () {
//    return view('welcome');
//});
// 4/24コメントアウトした

Auth::routes();

Route::get('/', 'IndexController@index')->name('index');    // 4/24 追加した
Route::get('/home', 'HomeController@index')->name('home');
//4/24 以下を追加
Route::name('user.')->prefix('user')->group(function () {
    Route::get('favorite','UserController@favorite')->name('favorite');
});
Route::name('theme.')->prefix('theme')->group(function () {
    Route::get('original', 'ArticleController@original')->name('original');
    Route::get('technology', 'ArticleController@technology')->name('technology');
    Route::get('economy', 'ArticleController@economy')->name('economy');
    Route::get('entertainment', 'ArticleController@entertainment')->name('entertainment');
    Route::get('sports', 'ArticleController@sports')->name('sports');
});
Route::get('/contact','ContactController@index')->name('contact');
//4/25 追加した
Route::get('/article/{id}','ArticleController@detail')->name('article');


