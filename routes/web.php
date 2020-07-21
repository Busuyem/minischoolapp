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

Route::fallback(function() {
    return redirect()->route("login");
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['Middleware' => ['auth', 'admin']],function(){

 Route::get('/admin', 'AdminController@adminDashboard')->name("admin.dashboard");

 Route::get('/users', 'AdminController@userDashboard')->name('user.dashboard');

 Route::delete('/admin/user/{user}', 'AdminController@deleteUser')->name('user.destroy');
});

Route::group(['Middleware' => 'auth'], function(){

    Route::post('/users', 'CoursesController@addCourse')->name('course.register');;

    Route::get('/course-lists', 'CoursesController@courseList')->name('users.courses');

    Route::get('/course-lists/edit/{id}', 'CoursesController@editCourse')->name('course.edit');

    Route::put('/course-lists/edit/{course}', 'CoursesController@updateCourse')->name('course.update');

    Route::delete('/course-lists/edit/{course}', 'CoursesController@deleteCourse')->name('course.destroy');

});









