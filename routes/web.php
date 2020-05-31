<?php

use Illuminate\Support\Facades\Route;


Route::get('/', ['as' => 'main', 'uses' => 'LayoutController@index']);

Route::get('/about_us', ['as' => 'about_us', 'uses' => 'AboutUsController@index']);

Route::group(['prefix' =>'catalog'], function (){
    Route::get('/', ['as' => 'catalog', 'uses' => 'CatalogController@index']);

    Route::get('/products', ['as' => 'products_catalog', 'uses' => 'CatalogController@products']);
    Route::get('/products/product_details', ['as' => 'product_details', 'uses' => 'CatalogController@details']);
//    Route::get('/products/product_details/{id}', ['as' => 'product_details', 'uses' => 'CatalogController@details']);
});

Route::group(['prefix' =>'personal'], function (){
    Route::get('/wishlist', ['as' => 'wishlist_personal', 'uses' => 'PersonalController@wish']);
    Route::get('/cart', ['as' => 'cart_personal', 'uses' => 'PersonalController@cart']);
});

Route::group(['prefix' =>'admin'], function (){
    Route::get('/', ['as' => 'admin', 'uses' => 'Admin\AdminController@index']);
});
