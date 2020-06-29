<?php

use App\User;
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
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/aboutus', 'aboutController@index')->name('home');

Route::get('/tracks', 'TracksController@index')->name('tracks');
Route::get('/tracks/create', 'TracksController@create')->middleware('can:RRAbility');
Route::post('/tracks', 'TracksController@store')->middleware('auth')->middleware('can:RRAbility');


// i did the auth in the controller
Route::get('/profile/{user}','ProfileController@show');
Route::get('/profile/{user}/edit','ProfileController@edit')->middleware('auth')->middleware('can:edit,user');
Route::patch('/profile/{user}','ProfileController@update')->middleware('auth')->middleware('can:edit,user');
//authrize
Route::get('/profile/edit/all','ProfileController@index')->middleware('can:AdminAbility,User::class');

//authrize
Route::get('/committees/{committee}','CommitteesController@show')->middleware('auth')->middleware('can:InstructorAbility');
Route::get('/committees/{committee}/edit','CommitteesController@edit')->middleware('auth')->middleware('can:RRAbility,committee');


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
Route::get('/events/create', 'EventController@create')->middleware('auth')->middleware('can:RRAbility');;
Route::post('/events', 'EventController@store')->middleware('auth')->middleware('can:RRAbility');;



Route::get('/contact',function ()
{
    return view('contact.indexx');
});
