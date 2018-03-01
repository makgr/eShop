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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'FrontendController@index');

Route::get('/signin', 'FrontendController@signin');
Route::get('/signup', 'FrontendController@signup');

//Route::get('/login', 'FrontendController@signin');
//Route::get('/signup', 'FrontendController@signup');






Auth::routes();

Route::group(['middleware' => 'auth'], function(){

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'BackendController@dashboard');

Route::get('/category-add', 'BackendController@category_add');
Route::get('/category-list', 'BackendController@category_list');
Route::get('/category-edit/{catid}', 'BackendController@category_edit');
Route::get('/category-delete/{catid}', 'BackendController@category_delete');

Route::get('/cat-delete/', 'BackendController@cat_delete');
Route::get('/show-category-list', 'BackendController@show_category_list');

Route::post('/insert-update-category', 'BackendController@insert_update_category');



// For product

Route::get('/product-add', 'BackendController@product_add');

Route::get('/product-list', 'BackendController@product_list');
Route::get('/product-edit/{product_id}', 'BackendController@product_edit');
Route::get('/product-delete/{product_id}', 'BackendController@product_delete');

// Route::get('/cat-delete/', 'BackendController@cat_delete');
// Route::get('/show-category-list', 'BackendController@show_category_list');

Route::post('/insert-update-product', 'BackendController@insert_update_product');




// Auth middleware end
});

