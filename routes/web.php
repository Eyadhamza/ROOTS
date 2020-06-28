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
Route::get('/tracks/create', 'TracksController@create');
Route::post('/tracks', 'TracksController@store');


Route::get('/gallery', 'GalleryController@index');
Route::get('/profile/{user}','ProfileController@show');
Route::get('/profile/{user}/edit','ProfileController@edit');
Route::patch('/profile/{user}','ProfileController@update');

Route::get('/profile/edit/all','ProfileController@index');

Route::get('/committees/{committee}','CommitteesController@show');

Route::get('/events', 'EventController@index')->name('events');
Route::get('/events/create', 'EventController@create');
Route::post('/events', 'EventController@store');

Route::get('/articles', 'ArticlesController@index');
Route::get('/articles/create', 'ArticlesController@create');
Route::get('/articles/{article}', 'ArticlesController@show');
Route::post('/articles', 'ArticlesController@store');
Route::get('/achievements', 'AchievementController@index');
Route::get('/achievements/create', 'AchievementController@create');
Route::get('/achievement/{achievement}', 'AchievementController@show');
Route::post('/achievements', 'AchievementController@store');
Route::get('/events', 'EventController@index')->name('events');

Route::post('/events', 'EventController@store');

Route::get('/contact',function ()
{
    return view('contact.indexx');
});
