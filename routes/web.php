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


// workshop
Route::get('/workshop','WorkshopController@getWorkshop');
Route::post('/workshop','WorkshopController@postWorkshop')->name('addWorkshop');
Route::get('/admin/login','AdminController@AdminLogin');
Route::post('/admin/login','AdminController@login');
Route::get('/admin/register','AdminController@AdminRegister');
Route::post('/admin/register','AdminController@Insert')->name('AdminRegister');

//cloudder route
Route::get('/', 'ImageUploadController@home');

Route::post('/upload/images', ['uses'=>'ImageUploadController@uploadImages','as'=>'uploadImage']);

//Backend Routes
Route::resource('workshop','WorkshopController');
//Route::resource('workshopinfo','Workshopinfo');


Route::get('/Workshopnew','WorkshopNew@index');
Route::get('/Workshopnew/add','WorkshopNew@create');
Route::post('/Workshopnew/add','WorkshopNew@store');
Route::get('/Workshopnew/show','WorkshopNew@show');
Route::get('/Workshopnew/delete/{id}','WorkshopNew@delete');
Route::get('/Workshopnew/edit','WorkshopNew@edit');
Route::post('/Workshopnew/edit','WorkshopNew@update');


//Events

Route::get('events','eventsController@index');
Route::get('events/add','eventsController@create');
Route::post('events/add','eventsController@store');
Route::get('events/edit/{id}','eventsController@edit');
Route::post('events/edit/{id}','eventsController@update');
Route::post('events/delete/{id}','eventsController@destroy');

// Events  info

Route::get('eventsInfo','eventsInfoController@index');
Route::get('eventsInfo/add','eventsInfoController@create');
Route::post('eventsInfo/add','eventsInfoController@store');
Route::get('eventsInfo/edit/{id}','eventsInfoController@edit');
Route::post('eventsInfo/edit/{id}','eventsInfoController@update');
Route::post('eventsInfo/delete/{id}','eventsInfoController@destroy');

// Events Participant

Route::get('eventsParticipant','eventsParticipantController@index');
Route::get('eventsParticipant/add','eventsParticipantController@create');
Route::post('eventsParticipant/add','eventsParticipantController@store');
Route::get('eventsParticipant/edit/{id}','eventsParticipantController@edit');
Route::post('eventsParticipant/edit/{id}','eventsParticipantController@update');
Route::post('eventsParticipant/delete/{id}','eventsParticipantController@destroy');