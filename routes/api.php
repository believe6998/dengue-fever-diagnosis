<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::name('api.')->middleware('api')->group(function () {
  Route::name('product.')->prefix('/product')->group(function () {
    Route::get('/{id}', 'ProductController@apiGetOne')->name('getOne');
  });

  Route::name('administrative-units.')->prefix('/administrative-units')->group(function () {
    Route::get('/tinh-tp', 'AdministrativeUnits@tinhTp')->name('tinh-tp');
    Route::get('/quan-huyen/{parent_code}', 'AdministrativeUnits@quanHuyen')->name('quan-huyen');
    Route::get('/xa-phuong/{parent_code}', 'AdministrativeUnits@xaPhuong')->name('xa-phuong');
  });

  // admin
  Route::post('login', 'AuthController@login');
  Route::post('register', 'AuthController@register');

  Route::group([
//    'middleware' => 'auth:api'
  ], function () {
    Route::delete('logout', 'AuthController@logout');

    // upload image
    Route::post('/uploads/{patch}', 'API\ImageController@store');

    // category
    Route::group(['prefix' => 'categories'], function () {
      Route::get('/allParent', 'API\CategoryController@allParent');
      Route::get('/all', 'API\CategoryController@all');
    });
    Route::apiResource('categories', 'API\CategoryController');

    // product
    Route::apiResource('products', 'API\ProductController');

    // order
    Route::group(['prefix' => 'orders'], function () {
      Route::get('/statistical', 'API\OrderController@statistical');
    });
    Route::apiResource('orders', 'API\OrderController');

    // blog
    Route::apiResource('articles', 'API\ArticleController');

    // contact
    Route::apiResource('contacts', 'API\ContactController');

    // dynamic_images
    Route::apiResource('dynamic-images', 'API\DynamicImageController');
  });

});
