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
//    // return view('welcome');
// 	//return 'hello Man';
// 	return view;
// });

Route::get('/','WellcomeController@index'); 
Route::get('/categoryView/{id}','WellcomeController@category');
Route::get('/contact','WellcomeController@contact');
Route::get('/productdetails/{id}','WellcomeController@productDetails');

//Auth
Auth::routes();
Route::get('/dashboard', 'HomeController@index');
//Auth




Route::group(['middleware'=>'AuthenticateMiddleware'],function(){

		// Category
		Route::get('/category/add','CategoryController@createCategory');
		Route::post('/category/save','CategoryController@storeCategory');
		Route::get('/category/manage','CategoryController@manageCategory');
		Route::get('/category/edit/{id}','CategoryController@editCategory');
		Route::post('/category/update','CategoryController@updateCategory');
		Route::get('/category/delete/{id}','CategoryController@deleteCategory');
		// Category

		// Menufacturer
		Route::get('/menufacturer/add','menufacturerController@createMenufacturer');
		Route::post('/menufacturer/save','menufacturerController@storeMenufacturer');
		Route::get('/menufacturer/manage','menufacturerController@manageMenufacturer');
		Route::get('/menufacturer/edit/{id}','menufacturerController@editMenufacturer');
		Route::post('/menufacturer/update','menufacturerController@updateMenufacturer');
		Route::get('/menufacturer/delete/{id}','menufacturerController@deleteMenufacturer');
		// Menufacturer

		// product
		Route::get('/product/add','ProductController@createProduct');
		Route::post('/product/save','ProductController@storeProduct');
		Route::get('/product/manage','ProductController@manageProduct');
		Route::get('/product/view/{id}','ProductController@viewProduct');
		Route::get('/product/edit/{id}','ProductController@editProduct');
		Route::post('/product/update','ProductController@updateProduct');
		Route::get('/product/delete/{id}','ProductController@deleteProduct');
		// product

});