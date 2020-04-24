<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', ['as' => 'main', 'uses' => 'LayoutController@index']);
