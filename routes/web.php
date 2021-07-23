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

/* Route::get('/', function () {
//     return view('welcome');
// });*/


Route::get('/','ClientController@home');
Route::get('/shop','ClientController@shop')->name('shop');
Route::get('/contact','ClientCOntroller@contact')->name('contact');
Route::get('/checkout','ClientController@checkout')->name('checkout');
Route::get('/product_single','ClientController@product_single')->name('product_single');
Route::get('/signup','ClientController@signup')->name('signup');
Route::get('/paiement','ClientController@paiement')->name('paiement');
Route::get('/about','ClientController@about@about')->name('about');
Route::get('/wishlist','ClientController@wishlist')->name('wishlist');
Route::get('/cart','ClientController@cart')->name('cart');
Route::get('/blog','ClientController@blog')->name('blog');
