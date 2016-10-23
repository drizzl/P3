<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lorem-ipsum', 'LoremIpsumController@index')->name('loremipsum.index');
Route::post('/lorem-ipsum', 'LoremIpsumController@show')->name('loremipsum.show');


Route::get('/user-generator', 'UserGeneratorController@index')->name('usergenerator.index');