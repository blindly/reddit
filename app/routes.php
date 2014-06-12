<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*
Route::get('/', function()
{
	return View::make('hello');
});
*/

Route::get('/', 'RedditController@showHot');
Route::get('/new', 'RedditController@showNew');
Route::get('/top', 'RedditController@showTop');

Route::get('/r/{subreddit}', 'ReaditController@showHot');
Route::get('/r/{subreddit}/hot', 'ReaditController@showHot');
Route::get('/r/{subreddit}/top', 'ReaditController@showTop');
Route::get('/r/{subreddit}/new', 'ReaditController@showNew');
Route::get('/r/{subreddit}/debug', 'ReaditController@showDebug');

Route::get('/r/{subreddit}/comments/{commentsId}', 'CommentsController@showComments');