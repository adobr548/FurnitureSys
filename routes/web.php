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

Route::resource('payments','PaymentController');

Route::delete('/furnitures/{id}','BaldaiController@destroy')->name('furnitures.destroy');
Route::delete('/warehouses/{id}','WarehouseController@destroy')->name('warehouses.destroy');
Route::delete('/customers/{id}','ClientController@destroy')->name('customers.destroy');
Route::delete('/employees/{id}','EmployeeController@destroy')->name('employees.destroy');
Route::delete('/sellers/{id}','SellerController@destroy')->name('sellers.destroy');
Route::delete('/accounts/{id}','AccountController@destroy')->name('accounts.destroy');
Route::delete('/contracts/{id}','AgreementController@destroy')->name('contracts.destroy');
Route::delete('/orders/{id}','OrderController@destroy')->name('orders.destroy');
