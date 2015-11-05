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

Route::get('/', 'darkController@index');
Route::get('contact', 'darkController@contact');
Route::get('me', 'darkController@me');
Route::get('code', 'darkController@code');
Route::get('misc', 'darkController@misc');
