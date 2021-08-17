<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','HomeController@HomeIndex')->middleware('loginCheck');
Route::get('/visitor','VisitorController@VisitorIndex')->middleware('loginCheck');

//Admin Panel Service Management

Route::get('/service','ServiceController@ServiceIndex')->middleware('loginCheck');
Route::get('/getservicedata','ServiceController@GetServiceData')->middleware('loginCheck');
Route::post('/servicedelete','ServiceController@ServiceDelete')->middleware('loginCheck');
Route::post('/servicedetails','ServiceController@GetOneServiceData')->middleware('loginCheck');
Route::post('/serviceupdate','ServiceController@ServiceUpdate')->middleware('loginCheck');
Route::post('/serviceadd','ServiceController@ServiceAdd')->middleware('loginCheck');

//Admin Panel Courses Management

Route::get('/courses','CoursesController@CourseIndex')->middleware('loginCheck');
Route::get('/getcoursedata','CoursesController@GetCourseData')->middleware('loginCheck');
Route::post('/coursedelete','CoursesController@CourseDelete')->middleware('loginCheck');
Route::post('/coursedetails','CoursesController@GetCourseDetails')->middleware('loginCheck');
Route::post('/courseupdate','CoursesController@CourseUpdate')->middleware('loginCheck');
Route::post('/courseadd','CoursesController@CourseAdd')->middleware('loginCheck');

//Admin Panel Project Management
Route::get('/projects','ProjectController@ProjectIndex')->middleware('loginCheck');
Route::get('/getprojectdata','ProjectController@GetProjectData')->middleware('loginCheck');
Route::post('/projectdelete','ProjectController@ProjectDelete')->middleware('loginCheck');
Route::post('/projectdetails','ProjectController@GetProjectDetails')->middleware('loginCheck');
Route::post('/projectupdate','ProjectController@ProjectUpdate')->middleware('loginCheck');
Route::post('/projectadd','ProjectController@ProjectAdd')->middleware('loginCheck');

//Admin Panel Contact Messages
Route::get('/contacts','ContactController@ContactIndex')->middleware('loginCheck');
Route::get('/getcontactdata','ContactController@GetContactData')->middleware('loginCheck');
Route::post('/contactdelete','ContactController@ContactDelete')->middleware('loginCheck');


//Admin Panel Review
Route::get('/review','ReviewController@ReviewIndex')->middleware('loginCheck');
Route::get('/getreviewdata','ReviewController@GetReviewData')->middleware('loginCheck');
Route::post('/reviewdelete','ReviewController@ReviewDelete')->middleware('loginCheck');
Route::post('/reviewdetails','ReviewController@GetReviewDetails')->middleware('loginCheck');
Route::post('/reviewupdate','ReviewController@ReviewUpdate')->middleware('loginCheck');
Route::post('/reviewadd','ReviewController@ReviewAdd')->middleware('loginCheck');

//Admin Panel Login
Route::get('/Login', 'LoginController@LoginIndex');
Route::post('/onLogin', 'LoginController@onLogin');
Route::get('/Logout', 'LoginController@onLogout');


// Admin Photo Gallery
Route::get('/Photo', 'PhotoController@PhotoIndex')->middleware('loginCheck');
Route::post('/PhotoUpload', 'PhotoController@PhotoUpload')->middleware('loginCheck');
Route::get('/PhotoJSON', 'PhotoController@PhotoJSON')->middleware('loginCheck');
Route::get('/PhotoJSONByID/{id}', 'PhotoController@PhotoJSONByID')->middleware('loginCheck');
Route::post('/PhotoDelete', 'PhotoController@PhotoDelete')->middleware('loginCheck');