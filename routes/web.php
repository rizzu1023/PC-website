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

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/admin/login', 'HomeController@index');



Route::get('socialauth/github', 'Auth\SocialAuthController@redirectToProvider');
Route::get('github/success', 'Auth\SocialAuthController@handleProviderCallback');

//Frontend Routes
Route::get('/pc','FrontendController@home');

Route::get('/admin','AdminController@Index');
Route::view('/admin/dashboard','admin.dashboard')->name('adminDash');
Route::view('admin','admin.adminlogin');

Route::get('/admin','AdminController@Index');
Route::view('/admin/dashboard','admin.dashboard');
Route::view('admin','admin.adminlogin');

//Admin Login

Route::get('/admin/dashboard','HomeController@admin');


Route::get('/admin/adminlogin','AdminController@AdminLogin');
Route::post('/admin/adminlogin','AdminController@login');
Route::get('/admin/adminregister','AdminController@AdminRegister');
Route::post('/admin/adminregister','AdminController@Insert')->name('AdminRegister');

//cloudder route
Route::get('/', 'ImageUploadController@home');
Route::post('/upload/images', ['uses'=>'ImageUploadController@uploadImages','as'=>'uploadImage']);

//workshop add
Route::get('/admin/Workshops','WorkshopController@index');
Route::get('/admin/Workshop/add','WorkshopController@create');
Route::post('/admin/Workshop/add','WorkshopController@store');
Route::get('/admin/Workshop/show/{id}','WorkshopController@show');
Route::post('/admin/Workshop/delete/{id}','WorkshopController@delete');
Route::get('/admin/Workshop/edit/{id}','WorkshopController@edit');
Route::post('/admin/Workshop/edit/{id}','WorkshopController@update');


Route::get('/admin/Workshopnew','WorkshopNew@index');
Route::get('/admin/Workshopnew/add','WorkshopNew@create');
Route::post('/admin/Workshopnew/add','WorkshopNew@store');
Route::get('/admin/Workshopnew/show','WorkshopNew@show');
Route::post('/admin/Workshopnew/delete/{id}','WorkshopNew@delete');
Route::get('/admin/Workshopnew/edit/{id}','WorkshopNew@edit');
Route::post('/admin/Workshopnew/edit/{id}','WorkshopNew@update');

//Workshopparticipants
Route::get('admin/Workshopsparticipants','WorkshopNew@home');
Route::get('admin/Workshopsparticipants/add','WorkshopNew@new');
Route::post('admin/Workshopsparticipants/add','WorkshopNew@storeparticipants');
Route::get('admin/Workshopsparticipants/show/{username}','WorkshopNew@userdetails');
Route::post('admin/Workshopsparticipants/delete/{id}','WorkshopNew@deleteparticipant');
Route::get('admin/Workshopsparticipants/edit/{id}','WorkshopNew@editparticipant');
Route::post('admin/Workshopsparticipants/edit/{id}','WorkshopNew@updateparticipant');


//Events

Route::get('admin/events','eventsController@index')->name('events');
Route::get('admin/events/add','eventsController@create');
Route::get('admin/events/edit/{id}','eventsController@edit');
Route::post('admin/events/add','eventsController@store');
Route::post('admin/events/edit/{id}','eventsController@update');
Route::post('admin/events/delete/{id}','eventsController@destroy');

// //Admin Routes

// Route::view('/event','admin.eventdashboard');
// Route::view('/dashboard','admin.dashboard');
// Route::view('/workshop','admin.workshopdash');
// Route::view('/poll','admin.polldash');
// Route::view('/blog','admin.blogdash');
// Route::view('/sponsor','admin.sponsordash');
// Route::view('/pc','admin.pcdash');
// Route::view('/user','admin.userdash');
// Route::view('/feedback','admin.feedbackdash');
// Route::view('/aboutus','admin.aboutusdash');
// Route::view('/contactus','admin.contactusdash');

// //Links
// Route::view('/about','admin.aboutus');
// Route::view('/addpoll','admin.addpoll');
// Route::view('/addblog','admin.addblog');
// Route::view('/addevent','admin.addevent');
// Route::view('/addeventinfo','admin.addeventinfo');
// Route::view('/eventparticipant','admin.eventparticipant');
// Route::view('/pcteam','admin.pcteam');
// Route::view('/addproblemdefination','admin.addpd');
// Route::view('/addschedule','admin.addschedule');
// Route::view('/addsponsor','admin.addsponsor');
// Events  info

Route::get('/admin/eventsInfo','eventsInfoController@index');
Route::get('/admin/eventsInfo/add','eventsInfoController@create');
Route::get('/admin/eventsInfo/edit/{id}','eventsInfoController@edit');
Route::post('/admin/eventsInfo/add','eventsInfoController@store');
Route::post('/admin/eventsInfo/edit/{id}','eventsInfoController@update');
Route::post('/admin/eventsInfo/delete/{id}','eventsInfoController@destroy');

// Events Participant

Route::get('/admin/eventsParticipant','eventsParticipantController@index');
Route::get('/admin/eventsParticipant/add','eventsParticipantController@create');
Route::get('/admin/eventsParticipant/edit/{id}','eventsParticipantController@edit');
Route::get('/admin/eventsParticipant/show/','eventsParticipantController@userdetails');
Route::post('/admin/eventsParticipant/add','eventsParticipantController@store')->name('addParticipant');
Route::post('/admin/eventsParticipant/edit/{id}','eventsParticipantController@update');
Route::post('/admin/eventsParticipant/delete/{id}','eventsParticipantController@destroy');
// Route::post('/mobile/api/success','mobileController@Insert');
// Events Problem Definitions

Route::get('/admin/eventsPdefinition','eventsProbDefiController@index');
Route::get('/admin/eventsPdefinition/add','eventsProbDefiController@create');
Route::get('/admin/eventsPdefinition/edit/{id}','eventsProbDefiController@edit');
Route::post('/admin/eventsPdefinition/add','eventsProbDefiController@store');
Route::post('/admin/eventsPdefinition/edit/{id}','eventsProbDefiController@update');
Route::post('/admin/eventsPdefinition/delete/{id}','eventsProbDefiController@destroy');

// Events Shedule

Route::get('/admin/eventSchedule','eventsProbDefiController@sindex');
Route::get('/admin/eventSchedule/add','eventsProbDefiController@screate');
Route::get('/admin/eventSchedule/edit/{id}','eventsProbDefiController@sedit');
Route::post('/admin/eventSchedule/add','eventsProbDefiController@sstore');
Route::post('/admin/eventSchedule/edit/{id}','eventsProbDefiController@supdate');
Route::post('/admin/eventSchedule/delete/{id}','eventsProbDefiController@sdestroy');


//Blog
Route::get('/admin/blog','BlogController@index');
Route::get('/admin/blog/add','BlogController@create');
Route::get('/admin/blog/edit/{id}','BlogController@edit');
Route::get('/admin/blog/show','BlogController@show');
Route::post('/admin/blog/add','BlogController@store');
Route::post('/admin/blog/delete/{id}','BlogController@delete');
Route::post('/admin/blog/edit/{id}','BlogController@update');



//feedback form
Route::get('/user/feedback','HomeController@feedback');
//feedback

Route::get('/admin/feedback','FeedbackController@index');
Route::get('/admin/feedback/show/{username}','FeedbackController@userdetails');
Route::post('/admin/feedback/add','FeedbackController@store');
Route::post('/admin/feedback/delete/{id}','FeedbackController@delete');

//sponsors
Route::get('/admin/sponsors/add','SponsorController@create');
Route::get('/admin/sponsors','SponsorController@index');
Route::get('/admin/sponsors/edit/{id}','SponsorController@edit');
Route::post('/admin/sponsors/add','SponsorController@store');
Route::post('/admin/sponsors/edit/{id}','SponsorController@update');
Route::post('/admin/sponsors/delete/{id}','SponsorController@delete');

// Contact Us

Route::get('/admin/contact','contactController@index');
Route::get('/admin/contact/add','contactController@create');
Route::get('/admin/contact/edit/{id}','contactController@edit');
Route::post('/admin/contact/add','contactController@store');
Route::post('/admin/contact/edit/{id}','contactController@update');
Route::post('/admin/contact/delete/{id}','contactController@destroy');

// About US 

Route::get('/admin/about','contactController@aindex');
Route::get('/admin/about/add','contactController@acreate');
Route::get('/admin/about/edit/{id}','contactController@aedit');
Route::post('/admin/about/add','contactController@astore');
Route::post('/admin/about/edit/{id}','contactController@aupdate');
Route::post('/admin/about/delete/{id}','contactController@adestroy');


//pcteam

Route::get('/admin/pcteam','PcteamController@index');
Route::get('/admin/pcteam/add','PcteamController@add');
Route::post('/admin/pcteam/add','PcteamController@store');
Route::get('/admin/pcteam/edit/{id}','PcteamController@edit');
Route::post('/admin/pcteam/edit/{id}','PcteamController@update');
Route::post('/admin/pcteam/delete/{id}','PcteamController@destroy');



//frontend Route
Route::get('/','HomeController@Home');
Route::get('/event','HomeController@getEvent');
Route::get('/about','HomeController@getAbout');
Route::get('/contact','HomeController@getContact');
Route::get('/eventRegister','HomeController@getRegister');
Route::get('/blog','HomeController@getBlog');
Route::get('/team','HomeController@getTeam');


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
