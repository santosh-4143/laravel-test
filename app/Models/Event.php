<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
		protected $table = "events";

	    function workshop() {
            return $this->hasMany(Workshop::class,"event_id");
        }

	    function futureEvent() {
            return $this->workshop()->where('start', '>=' , date('Y-m-d H:i:s') );
        }        
}
