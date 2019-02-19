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




Route::get('/admin/login','AdminController@AdminLogin')->middleware('admin');
//Route::post('/admin/login','AdminController@Authenticate');
Route::get('/admin/register','AdminController@AdminRegister');
Route::post('/admin/register','AdminController@Insert')->name('AdminRegister');