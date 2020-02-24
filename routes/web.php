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

/*Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/

//Route::get('/', 'PagesController@index');

Route::get('/', function () {
    return view('index');
});

Route::resource('furnitures', 'BaldaiController');
Route::resource('contracts', 'AgreementController');
Route::resource('warehouses', 'WarehouseController');
Route::resource('customers', 'ClientController');
Route::resource('employees','EmployeeController');
Route::resource('sellers','SellerController');
Route::resource('accounts','AccountController');
Route::resource('orders','OrderController');

Route::delete('/furnitures/{id}','BaldaiController@destroy')->name('furnitures.destroy');
