<?php

use Illuminate\Support\Facades\Route;


Route::get('/', ['as' => 'main', 'uses' => 'LayoutController@index']);

Route::get('/about_us', ['as' => 'about_us', 'uses' => 'AboutUsController@index']);

Route::group(['prefix' =>'catalog'], function (){
    Route::get('/', ['as' => 'catalog', 'uses' => 'CatalogController@index']);
    Route::get('/product_detail/{id}', ['as' => 'product_detail', 'uses' => 'CatalogController@detail']);
    Route::get('/category/{href_category}', ['as' => 'show_by_category', 'uses' => 'CatalogController@index']);
});

Route::group(['prefix' =>'personal'], function (){
    Route::get('/wishlist', ['as' => 'wishlist_personal', 'uses' => 'PersonalController@wish']);
    Route::get('/cart', ['as' => 'cart_personal', 'uses' => 'PersonalController@cart']);
});

Route::group(['prefix' =>'admin', 'middleware' => 'auth'], function (){
    Route::get('/', ['as' => 'admin', 'uses' => 'Admin\AdminController@index']);

    Route::get('/catalog', ['as' => 'catalog_list', 'uses' => 'Admin\ProductController@index']);
    Route::get('/catalog/new', ['as' => 'new_product', 'uses' => 'Admin\ProductController@new']);
    Route::get('/catalog/edit/{id}', ['as' => 'edit_product', 'uses' => 'Admin\ProductController@edit']);
    Route::post('/catalog/save', ['as' => 'save_product', 'uses' => 'Admin\ProductController@save']);
    Route::get('/catalog/delete/{id}', ['as' => 'delete_product', 'uses' => 'Admin\ProductController@delete']);
});

Auth::routes(['register' => false]);
Route::get('/password/reset', ['uses' => 'LayoutController22@index']);
Route::post('/password/reset', ['uses' => 'LayoutController22@index']);

//Route::get('/home', 'HomeController@index')->name('home');
