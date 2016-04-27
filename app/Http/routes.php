<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('welcome');
    })->middleware('guest');

    Route::get('/courses', 'CourseController@index');
    Route::get('/courses/{course}', 'CourseController@detail');
    Route::post('/course', 'CourseController@store');

    Route::get('/tasks', 'TaskController@index');
    Route::post('/task', 'TaskController@store');
    Route::delete('/task/{task}', 'TaskController@destroy');

    Route::auth();

});
Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('welcome');
    })->middleware('guest');


    Route::get('/tasks', 'TaskController@index');
    Route::post('/task', 'TaskController@store');
    Route::delete('/task/{task}', 'TaskController@destroy');

    Route::get('/courses', 'CourseController@index');
    Route::get('/courses/{course}', 'CourseController@detail');
    Route::post('/course', 'CourseController@store');

    Route::get('/forums', 'ForumController@index');
    Route::get('/forums/explore', 'ForumController@explore');
    Route::get('/forums/recent', 'ForumController@recent');
    Route::get('/forums/trending', 'ForumController@trending');
    Route::get('/forums/open', 'ForumController@open');
    Route::get('/forums/post', 'ForumController@post');


    Route::get('/forums/{forum}', 'ForumController@detail');
    Route::post('/forum', 'ForumController@store');




    Route::auth();

});
