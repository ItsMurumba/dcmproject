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
    return view('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

//route for register
Route::get('/register', function (){
    return view('register');
});

//route for home:dashboard
Route::get('/index', function (){
    return view('welcome');
});

//route for county form
Route::get('/county', function (){
    return view('county');
});


Route::get('/layout', function (){
    return view('layouts.app');
});

Route::post('/county', 'CountiesController@store');


//route for role form
Route::get('/roles', function (){
    return view('role');
});

Route::post('/roles', 'RolesController@store');