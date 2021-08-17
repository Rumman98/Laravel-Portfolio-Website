<?php

use Illuminate\Support\Facades\Route;


Route::get('/','HomeController@HomeIndex');
Route::post('/contactSend','HomeController@ContactSend');

Route::get('/course','CourseController@CoursePage');
Route::get('/project','ProjectsController@ProjectsPage');
Route::get('/policy','PolicyController@PolicyPage');
Route::get('/Terms','TermsController@TermPage');
Route::get('/contact','ContactController@ContactPage');


