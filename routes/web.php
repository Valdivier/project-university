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

/*Index*/
Route::get('/', 'MoviesController@loadmovies');

/* login */
Auth::routes();

/*HomeController*/
Route::get('/admin', 'HomeController@admin')->middleware('auth');
Route::get('/profile', 'HomeController@viewprofile')->middleware('auth');
Route::get('/contact', 'HomeController@viewcontact');

/* Controller Movies */
Route::get('/admin/get','MoviesController@get')->middleware('auth');
Route::post('admin/delete','MoviesController@admindelete')->middleware('auth');
Route::post('admin/update','MoviesController@adminupdate')->middleware('auth');
Route::post('admin/create','MoviesController@admincreate')->middleware('auth');
Route::get('/viewdetail/{id}','MoviesController@viewdetailmovies')->middleware('auth');

?>
