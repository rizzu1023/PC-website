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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('socialauth/github', 'Auth\SocialAuthController@redirectToProvider');
Route::get('github/success', 'Auth\SocialAuthController@handleProviderCallback');



Route::get('/admin','AdminController@Index');


// TEST
Route::get('/access/root','AdminController@Index');
Route::get('/access/root/login','AdminController@GetLogin');
Route::post('/access/root/login','AdminController@PostLogin');
Route::get('/access/root/GetSignup','AdminController@GetSignup');
Route::post('/access/root/GetSignup','AdminController@PostSignup');
Route::get('/logout','AdminController@Logout');