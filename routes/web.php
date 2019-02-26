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

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('socialauth/github', 'Auth\SocialAuthController@redirectToProvider');
Route::get('github/success', 'Auth\SocialAuthController@handleProviderCallback');



Route::get('/admin','AdminController@Index');
 Route::view('/admin/dashboard','admin.dashboard');
Route::view('admin','admin.adminlogin');


Route::get('/admin/adminlogin','AdminController@AdminLogin');
Route::post('/admin/adminlogin','AdminController@login');
Route::get('/admin/adminregister','AdminController@AdminRegister');
Route::post('/admin/adminregister','AdminController@Insert')->name('AdminRegister');

//cloudder route
Route::get('/', 'ImageUploadController@home');
Route::post('/upload/images', ['uses'=>'ImageUploadController@uploadImages','as'=>'uploadImage']);

//workshop add
Route::get('/Workshops','WorkshopController@index');
Route::get('/Workshop/add','WorkshopController@create');
Route::post('/Workshop/add','WorkshopController@store');
Route::get('/Workshop/show/{id}','WorkshopController@show');
Route::post('/Workshop/delete/{id}','WorkshopController@delete');
Route::get('/Workshop/edit/{id}','WorkshopController@edit');
Route::post('/Workshop/edit/{id}','WorkshopController@update');


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
Route::get('/Workshopsparticipants/show/{username}','WorkshopNew@userdetails');
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

//Admin Routes

Route::view('/event','admin.eventdashboard');
Route::view('/dashboard','admin.dashboard');
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
// Events  info

Route::get('eventsInfo','eventsInfoController@index');
Route::get('eventsInfo/add','eventsInfoController@create');
Route::post('eventsInfo/add','eventsInfoController@store');
Route::get('eventsInfo/edit/{id}','eventsInfoController@edit');
Route::post('eventsInfo/edit/{id}','eventsInfoController@update');
Route::post('eventsInfo/delete/{id}','eventsInfoController@destroy');

// Events Participant
/////////////
Route::get('eventsParticipant','eventsParticipantController@index');
Route::get('eventsParticipant/add','eventsParticipantController@create');
Route::post('eventsParticipant/add','eventsParticipantController@store');
Route::get('eventsParticipant/edit/{id}','eventsParticipantController@edit');
Route::post('eventsParticipant/edit/{id}','eventsParticipantController@update');
Route::post('eventsParticipant/delete/{id}','eventsParticipantController@destroy');
Route::get('/eventsParticipant/show/','eventsParticipantController@userdetails');

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



//feedback form
Route::get('/user/feedback','HomeController@feedback');
//feedback

Route::get('/feedback','FeedbackController@index');
Route::post('/feedback/add','FeedbackController@store');
Route::post('/feedback/delete/{id}','FeedbackController@delete');
Route::get('/feedback/show/{username}','FeedbackController@userdetails');

//sponsors
Route::get('/sponsors','SponsorController@index');
Route::get('/sponsors/add','SponsorController@create');
Route::post('/sponsors/add','SponsorController@store');
Route::get('/sponsors/edit/{id}','SponsorController@edit');
Route::post('/sponsors/edit/{id}','SponsorController@update');

Route::post('/sponsors/delete/{id}','SponsorController@delete');



