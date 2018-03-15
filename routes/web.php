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


Route::get('/dashboard', function(){
	return view('pages.dashboard');  
}); //route to display the dashboard

Route::get('/signup', 'AuthController@showSignup'); //route to display the signup page. 

Route::post('/signup', 'AuthController@register'); //route that controls what happen when user click on the submit button on the signup page.   


Route::get('/login', 'AuthController@showLogin');  //route to display the login page. 

Route::post('/login', 'AuthController@login');  //route that controls what happen when user click on the submit button on the login page.  

Route::get('/logout', 'AuthController@logout'); //route that controls logging out.  
//Route::get('/logout', 'SignupController@logout'); 

Route::get('/home','PagesController@home');

Route::get('/createevent', 'createEventController@create'); //route to display the create event page

Route::post('/createevent', 'createEventController@save');  