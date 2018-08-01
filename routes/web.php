<?php

Route::get('/', function () {
    return view('pages.homepage');
});
Route::get('404', ['as' => '404', 'uses' => 'ErrorHandlerController@errorCode404']);

// PRODUCTS
Route::get('toate-produsele', 'ProductController@index');
Route::get('produs/{name}', 'ProductController@show');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
