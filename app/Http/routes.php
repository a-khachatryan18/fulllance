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
Route::get('/how-it-works/{user_type}', 'PagesController@how_it_works');

Route::group(['middleware' => 'web'], function () {
    Route::get('signup', ['as'=>'signup','uses'=>'Auth\AuthController@showSignup']);
    Route::get('signin', ['as'=>'signup','uses'=>'Auth\AuthController@showSignin']);
    Route::post('signup_user', ['as'=>'signup_user','uses'=>'Auth\AuthController@signup_user']);
    Route::post('checkEmail', ['as'=>'checkEmail','uses'=>'Auth\AuthController@checkEmail']);
    Route::get('get_captcha', ['as'=>'get_captcha','uses'=>'Auth\AuthController@get_captcha']);

});
