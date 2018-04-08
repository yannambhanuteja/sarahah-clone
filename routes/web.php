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

Route::get('/home', 'HomeController@index')->name('home');

Route::POST('/user-update','HomeController@updatename')->name('user.update');

Route::PUT('/{userid}/editprofile','HomeController@updateprofile')->name('profile.update');

/* facebook routes*/
Route::get('login/facebook', 'Auth\RegisterController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\RegisterController@handleProviderCallback');

/*individual users*/
Route::get('/{user}','HomeController@profile')->name('profilelink');

Route::resource('message','MessageController');

Route::get('/{userid}/editprofile','HomeController@editprofile');

Route::get('/{userid}/fourvites','HomeController@fourvites');

Route::get('/sent/{id}','MessageController@sent')->name('sent');

/*leader board*/

Route::get('/leaderboard/id','HomeController@leaderboard')->name('leaderboard');

Route::get('/inbox/{id}','MessageController@inbox')->name('inbox');


Route::POST('/post/image/','HomeController@screenshot')->name('screenshot');

Route::POST('/emotions/angry','EmotionsController@store')->name('angry.store');

Route::POST('/emotions/haha','EmotionsController@storehaha')->name('haha.store');

Route::POST('/emotions/like','EmotionsController@storelike')->name('like.store');

Route::POST('/emotions/love','EmotionsController@storelove')->name('love.store');

Route::POST('/emotions/sad','EmotionsController@storesad')->name('sad.store');

Route::POST('/emotions/wow','EmotionsController@storewow')->name('wow.store');

Route::POST('/emotions/yay','EmotionsController@storeyay')->name('yay.store');

Route::POST('/inbox/favour','MessageController@favour')->name('message.favour');

Route::POST('/inbox/unfavour','MessageController@unfavour')->name('message.unfavour');


Route::POST('/inbox/delete','MessageController@delete')->name('message.delete');

Route::any('/search/search','SearchController@search');