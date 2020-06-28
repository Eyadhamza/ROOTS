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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/aboutus', 'aboutController@index')->name('home');

Route::get('/tracks', 'TracksController@index')->name('tracks');
Route::get('/tracks/create', 'TracksController@create')->middleware('auth');
Route::post('/tracks', 'TracksController@store')->middleware('auth');


// i did the auth in the controller
Route::get('/profile/{user}','ProfileController@show');
Route::get('/profile/{user}/edit','ProfileController@edit');
Route::patch('/profile/{user}','ProfileController@update');
//authrize
Route::get('/profile/edit/all','ProfileController@index');

//authrize
Route::get('/committees/{committee}','CommitteesController@show')->middleware('auth');


//authrize


Route::get('/articles', 'ArticlesController@index');
Route::get('/articles/create', 'ArticlesController@create')->middleware('auth');
Route::get('/articles/{article}', 'ArticlesController@show')->middleware('auth');
Route::post('/articles', 'ArticlesController@store')->middleware('auth');
Route::get('/achievements', 'AchievementController@index');
Route::get('/achievements/create', 'AchievementController@create')->middleware('auth');

//need to finish it
Route::get('/achievement/{achievement}', 'AchievementController@show');
Route::post('/achievements', 'AchievementController@store')->middleware('auth');

Route::get('/events', 'EventController@index')->name('events');
Route::get('/events/create', 'EventController@create')->middleware('auth');
Route::post('/events', 'EventController@store')->middleware('auth');



Route::get('/contact',function ()
{
    return view('contact.indexx');
});
