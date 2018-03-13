<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class signupModel extends Model
{
    //

      protected $table = 'account';
     protected $fillable = [
        'first_name', 'last_name', 'email', 'gender', 'phoneNumber', 'twitter', 'facebook', 'instagram', 'dob' 
    ];
}
