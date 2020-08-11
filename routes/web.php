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

Route::get('/', 'HomeController@index');
Route::get('/news/{slug}', 'HomeController@show');
Route::get('/category/{id}', 'HomeController@category');

Route::get('/admin', 'AdminPageController@showDashboard');
Route::get('/home', 'AdminPageController@showDashboard');

// news route
Route::get('/admin/news', 'AdminPageController@showNews');
Route::get('/admin/news/create', 'AdminPageController@createNews');
Route::get('/admin/news/{id}', 'PostController@show');
Route::post('/admin/news/create', 'PostController@store');
Route::get('/admin/news/delete/{id}', 'PostController@destroy');
Route::get('/admin/news/edit/{id}', 'PostController@edit');
Route::post('/admin/news/update/{id}', 'PostController@update');

// category route
Route::get('/admin/category', 'AdminPageController@showCategory');
Route::get('/admin/category/delete/{id}', 'CategoryController@destroy');
Route::post('/admin/category/create', 'CategoryController@store');

// user Route
Route::get('/admin/user', 'AdminPageController@showUser');
Route::get('/admin/user/create', 'AdminPageController@createUser');

Auth::routes([
  'register' => false
]);
