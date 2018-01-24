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



Route::get('/', 'ContentsController@home')->name('home');

Route::get('/about', 'ContentsController@about')->name('about');
Route::post('/about', 'ContentsController@sendMail')->name('send_mail');

Route::get('/contact', 'ContentsController@contact')->name('contact');

Route::get('/gallery', 'ContentsController@gallery')->name('gallery');

Route::get('/room/{room_id}', 'RoomsController@show')->name('show_room');
//Route::post('/room/{room_id}', 'RoomsController@check')->name('check_room');

Route::get('/reservations', 'RoomsController@check')->name('check_room');
Route::post('/reservations', 'RoomsController@check')->name('check_room');

Route::get('/book/room/{room_id}/{date_in}/{date_out}}/{name}/{email}', 'ReservationsController@bookRoom')->name('book_room');

