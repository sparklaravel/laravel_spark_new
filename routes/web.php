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

Route::get('/', 'WelcomeController@show');

Route::get('/home', 'HomeController@show');

//New

Route::post('/home/create_poll', 'MainController@create_poll');

Route::get('/plans', 'MainController@plans');

Route::get('/login_test', 'MainController@login');


