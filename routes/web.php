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
    return redirect()->route("login");
});

Route::get('/admin', 'AdminController@adminDashboard')->name("admin.dashboard")->middleware(['auth', 'admin']);

Route::get('/users', 'AdminController@userDashboard')->middleware('auth');

Route::post('/users', 'CoursesController@addCourse')->name('course.register')->middleware('auth');

Route::get('/course-lists', 'CoursesController@courseList')->name('users.courses')->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
