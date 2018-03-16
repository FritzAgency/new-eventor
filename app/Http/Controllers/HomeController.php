<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /*
This function helps display events on the homepage. 
    */ 
public function show(){
	$event = DB::table('event')->get(); //retrieves all the event from the database. 


return view('welcome')->with('event',$event); 
	//returns the page. 
}
}
