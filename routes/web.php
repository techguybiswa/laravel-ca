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




Route::get('/create', 'ProjectsController@create');
Route::post('/create', 'ProjectsController@store');

Route::get('/login', 'ProjectsController@show');

Route::patch('/login', 'ProjectsController@login');
