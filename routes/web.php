<?php

use Illuminate\Support\Facades\Auth;
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
//Auth::routes();

Route::get('/shopping-cart', 'HomeController@shoppingCart')->name('shopping-cart');
Route::get('/checkout', 'HomeController@checkout')->name('checkout');
Route::get('/about-us', 'AboutUsController@index')->name('about-us');

Route::name('client.')->group(function () {
  Route::get('/', 'HomeController@index')->name('index');

  Route::get('/home', 'HomeController@index')->name('home');

  Route::get('/diagnose', 'DiagnoseController@index')->name('index');

  Route::name('products.')->prefix('/products')->group(function () {
    Route::get('/', 'ProductController@index')->name('list');
    Route::get('/{slug}', 'ProductController@detail')->name('detail');
  });

  Route::name('order.')->group(function () {
    Route::post('/checkout', 'OrderController@store')->name('create-order');
    Route::get('/order-success', 'OrderController@success')->name('order-success');
  });

  Route::name('blog.')->prefix('/blog')->group(function () {
    Route::get('', 'ArticleController@index')->name('index');
    Route::get('/detail/{slug}', 'ArticleController@detail')->name('detail');
  });

  Route::name('contact-us.')->prefix('/contact-us')->group(function () {
    Route::get('', 'ContactController@index')->name('index');
    Route::post('', 'ContactController@store')->name('store ');
    Route::post('/add', 'ContactController@add')->name('add');
  });
});

Route::get('/images/{size}/{patch}/{imagePath}', 'API\ImageController@resize')
  ->where('imagePath', '(.*)');
