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

// Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/home','StudentsController@index');
//Route::get('/test','StudentsController@create');
Route::get('/home','AdminController@index');
Route::get('/home/create_course','CourseController@create');
Route::post('/home/create_course','CourseController@store')->name('create_course');
Route::get('/home/view_course','CourseController@index');

