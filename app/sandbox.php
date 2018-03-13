<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sandbox extends Model
{
    //
    public $timestamps = false;

        protected $table = 'sandbox';
     protected $fillable = [
        'first_name', 'last_name'
    ];

}
