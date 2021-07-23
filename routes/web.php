<?php

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

/* Route::get('/', function () {
//     return view('welcome');
// });*/
Route::get('/','ClientController@home');
Route::get('/shop','ClientController@shop');
Route::get('/contact','ClientCOntroller@contact');
Route::get('/checkout','ClientController@checkout');
Route::get('/product-single','ClientController@product-single');
Route::get('/signup','ClientController@signup');
Route::get('/paiement','ClientController@paiement');