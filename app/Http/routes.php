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


Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', function () {
      return view('welcome');
    });

    Route::get('login', function () { return redirect('/'); });
    Route::get('register', function(){ return redirect('/'); });
});

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('rsvp', 'GuestsController@create');
    Route::post('rsvp', 'GuestsController@store');

    Route::get('all-ze-guests', 'GuestsController@index');
    Route::get('edit-ze-guest/{id}', 'GuestsController@edit');
});
