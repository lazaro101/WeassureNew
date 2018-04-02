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

Route::get('/','WebController@Home');
Route::get('/Product','WebController@Products');
Route::get('/Gallery','WebController@Gallery');
Route::get('/Gallery/{id}',['uses' => 'WebController@GalleryPics']);
Route::get('/Update','WebController@Updates');
Route::get('/About','WebController@About');

Route::get('/Login','WebController@Login');
Route::post('/doLogin','WebController@doLogin');
Route::get('/Register','WebController@Register');

Route::get('/Admin','AdminController@Admin');
Route::post('/saveHome','AdminController@saveHome');
Route::post('/saveHome','AdminController@saveHome');
Route::post('/saveContent','AdminController@saveContent');
Route::post('/removeContent','AdminController@removeContent');

Route::get('/Admin/Employees','AdminController@Employees');
Route::post('/addEmployee','AdminController@addEmployee');
Route::post('/editEmployee','AdminController@editEmployee');
Route::get('/getEmployee','AdminController@getEmployee');
Route::post('/deleteemp', 'AdminController@deleteemp');

Route::get('/Admin/Products','AdminController@Products');
Route::post('/addProduct','AdminController@addProduct');
Route::post('/removeProduct','AdminController@removeProduct');

Route::get('/Admin/Updates','AdminController@Updates');
Route::post('/saveUpdates','AdminController@saveUpdates');

Route::get('/Admin/Gallery','AdminController@AdminGallery');
Route::post('/addGallery','AdminController@addGallery');
Route::get('/getGallery','AdminController@getGallery');
Route::post('/editGallery','AdminController@editGallery');
Route::post('/deleteGallery','AdminController@deleteGallery');

Route::get('/Admin/Gallery/{id}',['uses' => 'AdminController@AdminGalleryPics']);
Route::post('/addPics','AdminController@addPics');
Route::post('/removePic','AdminController@removePic');

Route::get('/logout', 'AdminController@logout');