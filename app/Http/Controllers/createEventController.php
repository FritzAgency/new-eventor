<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sandbox;
use Illuminate\Support\Facades\Input;
use DB;

class createEventController extends Controller
{
    //

    public function create(){
    	return view('event.createevent'); 
    }

    public function save(){

    	$create = new sandbox;
    	$create->first_name = Input::get('first_name');
    	$create->last_name = Input::get('last_name');   
        //$create->email = Input::get('email');
        //$create->password = Input::get('password'); 
        $create->save();
        return 'true'; 
        //return Redirect::back();


    }

    public function display(){

$sandbox = DB::table('sandbox')->get();
//return view ('welcome')->with('sandbox',$sandbox);
return view('welcome')->with($sandbox, compact('sandbox'));
    }
}
