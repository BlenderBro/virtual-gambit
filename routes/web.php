<?php

use Gloudemans\Shoppingcart\Facades\Cart;

Route::get('/', 'HomepageController@index')->name('homepage');
Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('404', ['as' => '404', 'uses' => 'ErrorHandlerController@errorCode404']);

// PRODUCTS
Route::get('toate-produsele', 'ProductController@index')->name('products.index');
Route::get('produs/{slug}', 'ProductController@show')->name('products.single');
//add product
//edit/del product

//CART
Route::get('/shopping-cart', 'CartController@index')->name('cart.index');
Route::post('/shopping-cart', 'CartController@store')->name('cart.addItemToCart');
Route::get('/sterge-produs', 'CartController@removeItem')->name('cart.removeSingleItem');

//temp destroy
Route::get('/del', function () {
    Cart::destroy();
});

//BLOG
Route::get('/blog', 'BlogController@index')->name('blog.index');
Route::get('/blog/{slug}', 'BlogController@show')->name('blog.single');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
