<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'UserController@index')->name('index');
Route::post('/addUser', 'UserController@addUser')->name('addUser');
Route::post('/editUser', 'UserController@editUser')->name('editUser');
Route::get('/delete/{id}', 'UserController@delete')->name('delete');
