<?php

/**
 *|--------------------------------------------------------------------------
 *| Application Routes
 *|--------------------------------------------------------------------------
 *|
 *| Here is where you can register all of the routes for an application.
 *| It's a breeze. Simply tell Laravel the URIs it should respond to
 *| and give it the controller to call when that URI is requested.
 *|
 *
 * @category   Application Routes
 * @package    Basic-Routes
 * @author     Sachin Pawaskar<spawaskar@unomaha.edu>
 * @copyright  2016-2017
 * @license    The MIT License (MIT)
 * @version    GIT: $Id$
 * @since      File available since Release 1.0.0
 */

Route::get('/', function () {
    return view('welcome');
});
Route::resource('matches','MatchController');
Route::resource('tournaments','TournamentController');
Route::resource('schools','SchoolController');
Route::resource('teams','TeamController');
Route::resource('players','PlayerController');

Route::resource('fouls','FoulController');


Route::resource('fields','FieldController');


Route::get('php-version', function()
{
    return phpinfo();
});

Route::get('laravel-version', function()
{
    $laravel = app();
    return 'Your Laravel Version is '.$laravel::VERSION;
});

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

//Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::post('change-password', 'Auth\AuthController@updatePassword');
    Route::get( 'change-password', 'Auth\AuthController@updatePassword');

    Route::get('/home', 'HomeController@index');
    Route::get('/about', 'HomeController@display');
    Route::resource('users', 'UsersController');
    Route::resource('roles', 'RolesController');



//    Route::delete('/comments/{comment}', 'CommentsController@destroy');
//    Route::resource('comments', 'CommentsController');
//    Route::get('comments/{student}/addforstudent', ['as' => 'comments.addforstudent',
//        'uses' => 'CommentsController@addforstudent']);
//    Route::get('comments/{planofstudy}/addforplanofstudy', ['as' => 'comments.addforplanofstudy',
//        'uses' => 'CommentsController@addforplanofstudy']);

//});
