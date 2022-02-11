<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'BookingController@Book')->name('client');
Route::get('/baitap', function () {
    return view('baitap');
});
Route::get('/aa', function () {
    return view('welcome');
});
Route::get('/list', function () {
    return view('client.booking.list');
});
Route::get('/main', function () {
    return view('main');
}) ->name('main');
Route::get('/thank', function () {
    return view('thank');
}) ->name('thank');
Route::post('/fill', 'BookingController@fill')->name('fill');
Route::post('/store_booking', 'BookingController@storeBooking')->name('store_booking');
Route::resource('/airline_company', 'AirlineCompanyController');
Route::resource('/flight', 'FlightController');
Route::resource('/passenger', 'PassengerController');
Route::resource('/user', 'UserController');
Route::resource('/plane', 'PlaneController');
Route::resource('/bill', 'BillController');
Route::resource('/bill_detail', 'BillDetailController');
Auth::routes();
Route::post('/book', 'BookingController@BookForm')->name('book');