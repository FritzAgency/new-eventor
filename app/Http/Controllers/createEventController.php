<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\eventModel;
use Illuminate\Support\Facades\Input;
use DB;
use Validator;
use App\signupModel;
use Auth;



class createEventController extends Controller
{
    //

    public function create(){
    	return view('event.createevent'); 
    }

    public function save(){


$rules = [
            'title' => 'required',
            'description' => 'required'
        ];

    $validator = Validator::make( Input::all (), $rules);

         if($validator->fails()) {
     	//if validation fails redirect back to the same page with the error of what went wrong. 
            //return Redirect::back()->withInput()->withErrors($validator); 
            return 'not working'; 
        }
else {
  $updir = 'public/';

        $user = new signupModel; 	
    	$create = new eventModel;
    	$create->title = Input::get('title');
    	$create->description = Input::get('description');
    	$create->Address=Input::get('Address'); 
    	$create->org_name=Input::get('org_name');  
    	$create->creator_id=Auth::user()->id; 
    
         //$img_name = $create->event_flier=Input::get('event_flier') 
        //$img_name = Input::get('event_flier');
//Request::file('event_flier')->move($updir, $img_name);     
        $create->save();
        return 'true'; 

}
    }

    public function display(){

$sandbox = DB::table('sandbox')->get();
//return view ('welcome')->with('sandbox',$sandbox);
return view('welcome')->with($sandbox, compact('sandbox'));
    }
}
