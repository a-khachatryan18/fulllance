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

Route::get('/', 'ClientPagesController@home');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'web'], function () {
    Route::get('signup', ['as'=>'signup','uses'=>'Auth\AuthController@showSignup']);
    Route::post('signup_user', ['as'=>'signup_user','uses'=>'Auth\AuthController@signup_user']);

});
