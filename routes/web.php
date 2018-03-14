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

/*Route::get('/', function () {
    return view('welcome');
});*/ 

/*
create event page
*/ 

// Route::get('/createevent', 'CreateEventController@create');

// Route::post('/createevent', 'CreateEventController@save');  


// Route::get('/', 'CreateEventController@display'); 

Route::get('/dashboard', function(){

	return view('pages.dashboard'); 
 
}); 

Route::get('/signup', 'SignupController@show'); 

Route::post('/signup', 'SignupController@register'); 

Route::get('/login', 'LoginController@login'); 

Route::post('/login', 'SignupController@login'); 

Route::get('/logout', 'SignupController@logout'); 