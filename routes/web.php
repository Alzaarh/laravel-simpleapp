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

Route::get('/', function () {

    return view('home');

});

Route::group(['prefix' => 'contact'], function () {

    Route::get('', 'MessagesController@showForm');

    Route::post('', 'MessagesController@submit');

});

Route::get('messages', function () {

    $messages = \App\Message::all();

    return view('messages')->with(['messages' => $messages]);

});

Route::get('about', function () {

    return view('about');

});

