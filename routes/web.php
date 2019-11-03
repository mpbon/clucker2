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

Route::get('/', 'HomeController@index');

Route::get('/welcome', function () {
    return view('welcome');
});



// Route::get('/login', function () {
//     return view('login');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/delete-comment/{id}', 'TweetsController@deleteComment');

Route::get('/delete-tweet/{id}', 'TweetsController@deleteTweet');

Route::post('/tweets', 'TweetsController@saveTweet');

Route::post('/comments', 'TweetsController@saveComment');

Route::put('/update-comment/{id}', 'TweetsController@updateComment');

Route::post('user/{user_id}/follow', 'FollowersController@followUser')->name('user-follow');

Route::post('/{user_Id}/unfollow', 'FollowersController@unFollowUser')->name('user-unfollow');

Route::get('/users', 'HomeController@index');
