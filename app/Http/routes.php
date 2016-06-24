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

Route::group(['prefix' => 'do'] , function() {
	Route::get('/great/{name?}', function ($name = null) {
	return view('actions.great' , ['name' => $name]);
	})->name('great');

	Route::get('/good', function () {
		return view('actions.good');
	})->name('good');

	Route::get('/best', function () {
		return view('actions.best');
	})->name('best');

	Route::post('/' , function(\Illuminate\Http\Request $request) {
		if(isset($request['action']) && isset($request['name']))
		{
			if(strlen($request['action']) > 0 )
			return view('actions.nice' , ['action' => $request['action'] , 'name' => $request['name']]);
		}
		return redirect()-back();
	})->name('benice');
});

