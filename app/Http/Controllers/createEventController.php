<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class createEventController extends Controller
{
    //

    public function create(){
    	return view('event.createevent'); 
    }
}
