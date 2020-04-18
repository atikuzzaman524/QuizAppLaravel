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

Route::resource('quizsections','QuizsectionsController');
Route::resource('questions','QuestionsController');
Route::resource('results','ResultsController');
Route::resource('quizresults','QuizresultsController');
Route::resource('invitations','InvitationsController');
Route::resource('users','UsersController');
