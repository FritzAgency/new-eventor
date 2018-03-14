<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class signupModel extends Model
{
    //

      public $table = "users";
      protected $primaryKey = 'id';
     protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'gender', 'phoneNumber', 'twitter', 'facebook', 'instagram', 'dob' 
    ];
}
