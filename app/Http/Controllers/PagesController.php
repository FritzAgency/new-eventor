<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //This controller controls
    public function signup(){
        return view ('pages.signup');
    }
}
