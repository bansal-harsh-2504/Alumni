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



Auth::routes();
Route::get('/homet', 'PagesController@index');
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/events', 'PagesController@events');
Route::get('/blog', 'PagesController@blogs');
Route::get('/gallery', 'PagesController@gallery');
Route::get('/contact', 'PagesController@contact');

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/admin/register', 'Auth\LoginController@showregisterForm');
Route::get('/login/alumni', 'Auth\LoginController@showAlumniLoginForm');
Route::get('/register-alumni', 'Auth\LoginController@showalumniregisterForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/alumni', 'Auth\RegisterController@showAlumniRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/student', 'Auth\LoginController@studentLogin');
Route::post('/login/alumni', 'Auth\LoginController@alumniLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/alumni', 'Auth\RegisterController@createAlumni');
Route::post('/Admin/contribution', 'Auth\RegisterController@viewContribution');

Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/alumni-dashboard', 'PagesController@alumnidash');
Route::get('/admin-dashboard', 'PagesController@admindash');

//Alumni edits
Route::get('/Alumni/{id}/edit', 'AlumniController@profile');
Route::post('/Alumni/{id}/profileupdate', 'AlumniController@updateprofile');
//Administrator event routes
Route::get('/Events', 'EventController@index');
Route::post('/Events/create', 'EventController@store');
Route::get('/Event/{id}/show', 'EventController@show');
Route::get('/Event/{id}/remove', 'EventController@destroy');
Route::get('/Event/{id}/edit', 'EventController@edit');
Route::post('/Event/{id}/update', 'EventController@update');
//Admin  Alumni section routing
Route::get('/Alumni', 'AlumController@index');
Route::get('/Alumni/{id}/edit', 'AlumController@edit');
Route::post('/Alumni/{id}/update', 'AlumController@update');
Route::post('/Alumni/{id}/delete', 'AlumController@destroy');
Route::get('/admin-dashboard/{id}/profile', 'StaffController@profile');
// Routes for user view events
Route::get('/event-details/{id}', 'PagesController@viewevent');
//  Routes for notices page
Route::get('/news', 'PagesController@news');
Route::get('/news-details/{id}', 'PagesController@newsdetails');
Route::get('/communications', 'CommunicationController@index');
