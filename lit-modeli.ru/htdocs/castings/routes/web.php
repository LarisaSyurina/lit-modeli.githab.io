<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\HomeController;
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

Route::get('/', 'HomeController@index');
Route::get('/main','MainController@index');
Route::get('/about', 'AboutController@index');
Route::get('/services', 'ServicesController@index');
Route::get('/gallery', 'GalleryController@index');
Route::get('/contacts1', 'ContactsPageController@index');
Route::get('/catalogue', 'CatalogueController@index');
Route::get('/catalogue/{id}', 'CatalogueController@category');
Route::get('/product/{id}', 'ProductController@index');
Route::get('/search', 'SearchController@index');
Route::get('/politics', 'PoliticsController@index');

//Route::get('/catalogue/category/{slug?}', 'CatalogueController@category') -> name('category');
//Route::get('/catalogue/product/{slug?}', 'CatalogueController@product') -> name('product');

Route::get('/products', 'ProductsController@index');
Route::get('/cart', 'ProductsController@cart');
Route::get('/add-to-cart/{id}', 'ProductsController@addToCart');
Route::get('/add-to-cart/{id}/{quantity}', 'ProductsController@addToCartByQuantity');

Route::patch('/update-cart', 'ProductsController@update');
Route::delete('/remove-from-cart', 'ProductsController@remove');

Route::get('/contact', [
    'uses'=>'ContactMessageController@create'
]);
Route::post('/contacts/submit','ContactsController@index')->name('contact-form');
Route::resource('topic', 'TopicController');


Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');