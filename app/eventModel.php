<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class eventModel extends Model
{
    //


      public $table = "event";

      protected $fillable = ['title', 'description', 'event_flier', 'event_logo', 'org_name', 'org_logo', 'free', 'state', 'city' ];


}
