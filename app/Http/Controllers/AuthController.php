<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\signupModel;
use Hash;
use Auth;
use Redirect;
use Session;
use Validator;
use Illuminate\Support\Facades\Input;


class AuthController extends Controller
{
    //

/*
This function renders the signup page
*/
  public function showSignup(){
    return view('pages.signup'); 
}

/*
This function renders the login 
page 
*/ 

public function showLogin(Request $request){
       return view('pages.login');  
 }


/*

*This function triggers when the user click on the submit button. 

*Validate the user inputs(email, password...) before signing up. 

*/ 

    public function register(Request $request){
/*

rules that must be met for the first_name, last_name, email and password fields. 

*first_name: required and must be at least 4 characters 

*last_name:required and must be at least 4 characters

*password: required, not already in the database and must be at least 6 characters. 

*/ 
      $rules = [
            'first_name' => 'required|min:4',
            'last_name' => 'required|min:4',
            'email' => 'required|email|unique:account',
            'password' => 'required|min:6'
        ];
/*
pass the $rules for validation. 
*/ 

    $validator = Validator::make( Input::all (), $rules);


/*
check the validator
*/ 
     if($validator->fails()) {
     	//if validation fails redirect back to the same page with the error of what went wrong. 
            return Redirect::back()->withInput()->withErrors($validator); 
        }

        else{
        	//validation successful, signup the user. 
/*

change of first_name and last_name can affect a user's generated page or vendor's page 


*/ 


        	$user = new signupModel; 
        	$user->first_name = $request->get ( 'first_name' );//get the user first_name from the form field
        	$user->last_name=$request->get('last_name'); //get the user's last_name from the form field  
        	$user->gender=$request->get('gender');//get the user's gender from the form field
        	$user->dob=$request->get('dob');//get the users' date of birth from the form field
        	$user->phoneNumber=$request->get('phoneNumber');//get the user's phoneNumber from the form field
        	$user->twitter=$request->get('twitter'); //get the user's twitter handle from the form field
        	$user->instagram=$request->get('instagram'); //get the user's instagram handle from the form field 
        	$user->facebook=$request->get('facebook'); //get the user's facebook handle from the form field
			$user->email = $request->get( 'email' );//get the user's email from the form field 

			$user->password = Hash::make ( $request->get ( 'password' ) ); //get the user's password  from the form field and hash it in the process. 

			$user->save (); //save her details into the database. 

			 return redirect('/login'); //redirect to the login page 
			}

}


/*
The process behind user login. 

*/ 

public function login(Request $request) {

/*
instantiate the class $user
*/ 	

$user = new signupModel; 

/*
set the rules for user login 

email: required
password: required
*/

$rules = array ('email' => 'required','password' => 'required' );

/*
validate the user inputs (email and password).  
*/ 
		$validator = Validator::make ( Input::all (), $rules );

		if ($validator->fails ()) {

            return Redirect::back()->withInput()->withErrors($validator);//vailidate failed, redirect to the same page with the error
		} else {
			/*
            validation successful, login the user 
			*/ 

			$input = Input::all();  

			if (Auth::attempt ( array ($email = 'email'=>$input['email'], $password = 'password'=>$input['password']))) {
				session ( [ 
					
			$user->email = $request->get( 'email') //save the user's email into the browser session.
			 ]);
				return redirect('/dashboard'); //redirect the user to the dashboard or wherever youn want to.  
			} else {
				/*
				in case of any error, show this
				*/  

				Session::flash ( 'message', "Invalid Credentials , Please try again." );
				return Redirect::back (); //redirect to the same page. 
			}
		}
	}

/*
logout the user
*/ 

	public function logout() {
		Session::flush ();//destroy the session stored. 
		Auth::logout ();
		return redirect('/login');//redirect to the login page in case she wants to login again (in case she forgots something:)   
	}

}

