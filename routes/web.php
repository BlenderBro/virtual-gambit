<?php

Route::get('/', function () {
    return view('pages.homepage');
});
Route::get('404', ['as' => '404', 'uses' => 'ErrorHandlerController@errorCode404']);

// PRODUCTS
Route::get('toate-produsele', 'ProductController@index');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
