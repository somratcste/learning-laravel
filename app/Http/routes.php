<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/great/{name?}', function ($name = null) {
	return view('actions.great' , ['name' => $name]);
})->name('great');

Route::get('/good', function () {
	return view('actions.good');
})->name('good');

Route::get('/best', function () {
	return view('actions.best');
})->name('best');
