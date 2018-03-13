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


class SignupController extends Controller
{
    //
    public function register(Request $request){

      $rules = [
            'first_name' => 'required|min:4',
            'last_name' => 'required|min:4',
            'email' => 'required|email|unique:account',
            'password' => 'required|min:6'
        ];

    $validator = Validator::make( Input::all (), $rules);

     if($validator->fails())
        {
            return Redirect::back()->withInput()->withErrors($validator);

            //return 'erroro, erro, all over the place'
;        }else{
        	$user = new signupModel; 
        	$user->first_name = $request->get ( 'first_name' );
        	$user->last_name=$request->get('last_name');
        	$user->gender=$request->get('gender');
        	$user->dob=$request->get('dob');
        	$user->phoneNumber=$request->get('phoneNumber');
        	$user->twitter=$request->get('twitter');
        	$user->instagram=$request->get('instagram'); 
        	$user->facebook=$request->get('facebook'); 
			$user->email = $request->get( 'email' );
			$user->password = Hash::make ( $request->get ( 'password' ) );

			$user->save ();
			// return redirect('/login');
			return 'good'; 

        }

}
	}

