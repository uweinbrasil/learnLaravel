<?php

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

/* Route::get('/', function () {
    //return view('welcome');
    return view('layouts/main');
}); */

//Route::get('/', 'PagesController@index');
Route::get('/', 'HomeController@index');
Route::get('/imprint', 'PagesController@imprint');
Route::get('/contact', 'PagesController@contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('admin/product', 'ProductController');

//Route::get('admin/product/{$product}/destroy', ['as' => 'product.destroy', 'uses' => 'ProductController@destroy']);



//Route::post('admin/product/{productId}', 'ProductController@update')->name('product.update');
//
//Route::get('admin/product/{productId}/show', 'ProductController@show')->name('product.show');
//Route::get('admin/product/{productId}/edit', 'ProductController@edit')->name('product.show');
//Route::get('admin/product/{productId}/edit', 'ProductController@edit')->name('product.edit');
//Route::get('admin/product/{productId}/destroy', 'ProductController@destroy')->name('product.destroy');
/* Route::get('admin/product/{productId}/destroy', function($p) {
    $product = App\Product::find($p);   
    var_dump("p=".$p); var_dump($product);
} )->name('product.destroy'); */
/* Route::get('/post/{post}', function () {
    //
})->name('post.show'); */



//Route::get('test/{any?}', 'TestController@test');

/* Route::get('/', function()
{
    echo '<pre>';
    $user = User::where('person_id', '=', 1);
    var_dump($user->toArray()); // <---- or toJson()
    echo '</pre>';
    //exit;  <--if you want
});
 */