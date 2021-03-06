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

//Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/how-it-works/{user_type}', 'PagesController@how_it_works');

Route::group(['middleware' => 'web'], function () {
    Route::get('signup', ['as'=>'signup','uses'=>'Auth\AuthController@showSignup']);
    Route::get('signin', ['as'=>'signin','uses'=>'Auth\AuthController@showSignin']);
    Route::get('logout', ['as'=>'logout','uses'=>'Auth\AuthController@logout']);
    Route::post('signup_user', ['as'=>'signup_user','uses'=>'Auth\AuthController@signup_user']);
    Route::post('login_user', ['as'=>'login_user','uses'=>'Auth\AuthController@login_user']);
    Route::post('checkEmail', ['as'=>'checkEmail','uses'=>'Auth\AuthController@checkEmail']);
    Route::post('checkCaptcha', ['as'=>'checkCaptcha','uses'=>'Auth\AuthController@checkCaptcha']);
    Route::post('checkUsername', ['as'=>'checkUsername','uses'=>'Auth\AuthController@checkUsername']);
    Route::get('signup/verify/{confirmationCode}', ['as'=>'verify','uses'=>'Auth\AuthController@verify']);
    Route::get('freelancer/{profile_id}','FreelancerController@showProfile');
    Route::get('regen_captcha', function(){
        return captcha_src();
    });
    Route::get('login', function(){
        return redirect('/signin');
    });
});





Route::group(['middleware' => 'auth'], function () {
    Route::get('find-work', ['as'=>'find_work','uses'=>'FreelancerController@find_work']);
    Route::get('jobs-home', ['as'=>'jobs_home','uses'=>'ClientController@jobs_home']);
    Route::get('freelancer/settings', 'UserSettingsController@settings');
    Route::get('payments/tax-info', 'UserSettingsController@tax_info');
    Route::get('payments/disbursement-methods', 'UserSettingsController@get_paid');
    Route::get('settings/profile', 'UserSettingsController@profile_info');
    Route::get('app-authorizations', 'UserSettingsController@app_authorizations');
    Route::get('membership-connects', 'UserSettingsController@membership_connects');
    Route::get('myteams', 'UserSettingsController@myteams');
    Route::get('account-security/password', 'UserSettingsController@password_security');
    Route::get('notification-settings', 'UserSettingsController@notification_settings');
    Route::get('client/settings', 'UserSettingsController@client_settings');
    Route::get('payments/billing-methods', 'UserSettingsController@billing_methods');
});

