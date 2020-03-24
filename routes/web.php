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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',function() {
    return view('templates.dashboard');
});

Route::get('/dashboard',function() {
    return view('templates.dashboard');
});

Route::get('/category','CategoryController@index');
Route::get('/category/insert','CategoryController@create');
Route::post('/category/store','CategoryController@store');
Route::get('/category/edit/{id}', 'CategoryController@edit');
Route::put('/category/update/{id}', 'CategoryController@update');
Route::get('/category/destroy/{id}', 'CategoryController@destroy');

Route::get('/customer','CustomerController@index');
Route::get('/customer/insert','CustomerController@create');
Route::post('/customer/store','CustomerController@store');
Route::get('/customer/edit/{id}', 'CustomerController@edit');
Route::put('/customer/update/{id}', 'CustomerController@update');
Route::get('/customer/destroy/{id}', 'CustomerController@destroy');


Route::get('/user','UserController@index');
Route::get('/user/insert','UserController@create');
Route::post('/user/store','UserController@store');
Route::get('/user/edit/{id}', 'UserController@edit');
Route::put('/user/update/{id}', 'UserController@update');
Route::get('/user/destroy/{id}', 'UserController@destroy');


Route::get('/product','ProductController@index');
Route::get('/product/insert','ProductController@create');
Route::post('/product/store','ProductController@store');
Route::get('/product/edit/{id}', 'ProductController@edit');
Route::put('/product/update/{id}', 'ProductController@update');
Route::get('/product/destroy/{id}', 'ProductController@destroy');

Route::get('/pos','POSController@index');