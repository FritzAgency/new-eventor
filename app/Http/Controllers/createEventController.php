<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\eventModel;
use Illuminate\Support\Facades\Input;
use DB;
use Validator;
use App\signupModel;
use Auth;
use App\Http\Controllers;
use View;
use Route;





class createEventController extends Controller
{
    //

/*
This function renders the event form 

the generated name, description and image will be featured on the eventor.com homepage and in search results. 
*/
    public function create(){
    	return view('event.createevent'); 
    }


/*
This function helps to save the form field into the database
*/ 
    public function save(Request $request){

/*
The rules for the form field. 

*the title field is required.
*the description field is required. 
*/

$rules = [
            'title' => 'required',
            'description' => 'required'
        ]; 


/*
validation for  the form field
*/ 
    $validator = Validator::make( Input::all (), $rules);

/*
if validation fails, return error.
*/
         if($validator->fails()) {
     	//if validation fails redirect back to the same page with the error of what went wrong. 
            //return Redirect::back()->withInput()->withErrors($validator); 
            return 'Error, something went wrong'; 
        }
else {
        $path = public_path() . '/'; 

        $user = new signupModel; 	
    	$create = new eventModel; //instantiate the class Event
    	$create->title = Input::get('title');//grabs the title field from the form field
    	$create->description = Input::get('description');//grabs the description field from the form field
    	$create->Address=Input::get('Address'); //grabs the Address field from the form field
    	$create->org_name=Input::get('org_name'); //grabs the org_name field from the form field 
        $create->free=Input::get('free'); 
        $create->ticket_qty=Input::get('ticket_qty');
        $create->ticket_price=Input::get('ticket_price'); 
        $create->state=Input::get('state'); 
        $create->city=Input::get('city');        
    	$create->creator_id=Auth::user()->id;//gets the id of the logged in user.
        
        $file = Input::file('event_flyer');
if ($file !== null) {

         /*$filename = strtolower($request->file('event_flyer')->getClientOriginalExtension() ); */  

             //  $filename =$file .  strtolower($request->file('event_flyer')->getClientOriginalExtension());

              // $filename=   strtolower($request->file('event_flyer')->getClientOriginalExtension());
         /*$filename = file_get_contents($path);
$type = pathinfo($path, PATHINFO_EXTENSION);
$base64 = $base64_encode($filename);*/ 
$filename = $file->getClientOriginalName();
}

     //$filename1 =

       $request->file('event_flyer')->move($path, $filename); 
         /*$filename = 'event_image-' . md5(time() . $event->id) . '.' . strtolower($request->file('event_image')->getClientOriginalExtension());*/ 

        
        $create->event_flyer =$filename;        
        $create->save();//saves the the data into the database 
        //return 'Page creation successful';

        //$message = 'success'; 
return Redirect::back();

//return view::make("event.createevent", ["message"=>$message]);
        //return Redirect::back()->with(['message', 'Success']); 
//["posts"=>$posts]

}
 }

/*
The function to display the generated page
*/

    public function displayEvent(){

$id = Route::input('id'); //grabs the id from the url 


$event = DB::table('event')->where('id', '=', $id)->get(); //queries the database to return all results related to the id. 


return view('pages.event')->with('event',$event); //returns the generated page. 
    
    }
}

