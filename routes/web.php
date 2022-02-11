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

Route::get('/aab', 'bookingController@Book')->name('client');
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
Route::get('/', function () {
    return view('thank');
}) ->name('thank');
Route::post('/fill', 'bookingController@fill')->name('fill');
Route::post('/store_booking', 'bookingController@store_booking')->name('store_booking');

Route::resource('/hocsinh', 'hocsinhController');
Route::resource('/airline_company', 'airline_companyController');
Route::resource('/flight', 'flightController');
Route::resource('/passenger', 'passengerController');
Route::resource('/user', 'userController');
Route::resource('/plane', 'planeController');
Route::resource('/bill', 'billController');
Route::resource('/bill_detail', 'bill_detailController');
Auth::routes();
Route::get('/admin', 'AdminController@AdminLogin')->middleware(['auth', 'role:admin']);
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/book', 'bookingController@BookForm')->name('book');

Route::get('/login_form', function () {
    return view('login_form');
});
Route::post('/login_sql', 'laivanvoController@login')->name('login_sql');

Route::get('/register_form', function () {
    return view('register_form');
});
Route::post('/register_sql', 'laivanvoController@register')->name('register_sql');
