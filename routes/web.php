<?php

Route::get('/', function () {
    return view('pages.homepage');
});
Route::get('/contact', function (){
    return view('pages.contact');
});


Route::get('404', ['as' => '404', 'uses' => 'ErrorHandlerController@errorCode404']);

// PRODUCTS
Route::get('toate-produsele', 'ProductController@index');
Route::get('produs/{slug}', 'ProductController@show');
//add product
//edit/del product

//CART
Route::get('/shopping-cart', 'CartController@index');





Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');
