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

//Workshopparticipants
Route::get('/Workshopsparticipants','WorkshopNew@home');
Route::get('/Workshopsparticipants/add','WorkshopNew@new');
Route::post('/Workshopsparticipants/add','WorkshopNew@storeparticipants');
Route::get('/Workshopsparticipants/show','WorkshopNew@userdetails');
Route::post('/Workshopsparticipants/delete/{id}','WorkshopNew@deleteparticipant');
Route::get('/Workshopsparticipants/edit/{id}','WorkshopNew@editparticipant');
Route::post('/Workshopsparticipants/edit/{id}','WorkshopNew@updateparticipant');


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

// Events Problem Definitions

Route::get('eventsPdefinition','eventsProbDefiController@index');
Route::get('eventsPdefinition/add','eventsProbDefiController@create');
Route::post('eventsPdefinition/add','eventsProbDefiController@store');
Route::get('eventsPdefinition/edit/{id}','eventsProbDefiController@edit');
Route::post('eventsPdefinition/edit/{id}','eventsProbDefiController@update');
Route::post('eventsPdefinition/delete/{id}','eventsProbDefiController@destroy');

// Events Shedule

Route::get('eventSchedule','eventsProbDefiController@sindex');
Route::get('eventSchedule/add','eventsProbDefiController@screate');
Route::post('eventSchedule/add','eventsProbDefiController@sstore');
Route::get('eventSchedule/edit/{id}','eventsProbDefiController@sedit');
Route::post('eventSchedule/edit/{id}','eventsProbDefiController@supdate');
Route::post('eventSchedule/delete/{id}','eventsProbDefiController@sdestroy');


//Blog


Route::get('/blog','BlogController@index');
Route::get('/blog/add','BlogController@create');
Route::post('/blog/add','BlogController@store');
Route::get('/blog/show','BlogController@show');
Route::post('/blog/delete/{id}','BlogController@delete');
Route::get('/blog/edit/{id}','BlogController@edit');
Route::post('/blog/edit/{id}','BlogController@update');

