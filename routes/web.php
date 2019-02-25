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
// Route::resource('workshop','WorkshopController');
//Route::resource('workshopinfo','Workshopinfo');


Route::get('/Workshopnew','WorkshopNew@index');
Route::get('/Workshopnew/add','WorkshopNew@create');
Route::post('/Workshopnew/add','WorkshopNew@store');
Route::get('/Workshopnew/show','WorkshopNew@show');
Route::get('/Workshopnew/delete/{id}','WorkshopNew@delete');
Route::get('/Workshopnew/edit','WorkshopNew@edit');
Route::post('/Workshopnew/edit','WorkshopNew@update');


//Events

Route::get('/events','eventsController@index');
Route::get('/events/add','eventsController@create');
Route::post('/events/add','eventsController@store');
Route::get('/events/edit/{id}','eventsController@edit');
Route::post('/events/edit/{id}','eventsController@update');
Route::post('/events/delete/{id}','eventsController@destroy');

//Admin Routes

Route::view('/event','admin.eventdashboard');
Route::view('/dashboard','admin.dashboard')->name('dashboard');
Route::view('/workshop','admin.workshopdash');
Route::view('/poll','admin.polldash');
Route::view('/blog','admin.blogdash');
Route::view('/sponsor','admin.sponsordash');
Route::view('/pc','admin.pcdash');
Route::view('/user','admin.userdash');
Route::view('/feedback','admin.feedbackdash');
Route::view('/aboutus','admin.aboutusdash');
Route::view('/contactus','admin.contactusdash');

//Links
Route::view('/about','admin.aboutus');
Route::view('/addpoll','admin.addpoll');
Route::view('/addblog','admin.addblog');
Route::view('/addevent','admin.addevent');
Route::view('/addeventinfo','admin.addeventinfo');
Route::view('/eventparticipant','admin.eventparticipant');
Route::view('/pcteam','admin.pcteam');
Route::view('/addproblemdefination','admin.addpd');
Route::view('/addschedule','admin.addschedule');
Route::view('/addsponsor','admin.addsponsor');