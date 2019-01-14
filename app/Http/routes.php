<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('foo', function () {
    return 'Hello World';
});


Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/create/ticket','TicketController@create');
Route::post('/create/ticket','TicketController@store');
Route::get('/tickets', 'TicketController@index');
Route::patch('/edit/ticket/{id}','TicketController@update');
Route::get('/edit/ticket/{id}','TicketController@edit');

Route::delete('/delete/ticket/{id}','TicketController@destroy');