<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    //
    public function register(Request $request){

      $rules = [
            'first_name' => 'required|min:4',
            'last_name' => 'required|min:4',
            'email' => 'required|email|unique:account',
            'password' => 'required|confirmed|min:6'
        ];

    $validator = Validator::make( Input::all (), $rules);

     if($validator->fails())
        {
            return Redirect::back()->withInput()->withErrors($validator);
        }else{
        	$user = new signupModel; 
        	$user->first_name = $request->get ( 'first_name' );
        	$user->last_name=$request->get('last_name');
        	$user->gender=$request->get('gender');
        	$user->dob=$request->get('dob');
        	$user->phoneNumber=$request->get()
			$user->email = $request->get( 'email' );
			$user->password = Hash::make ( $request->get ( 'password' ) );
        }

}
	}

