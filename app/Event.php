<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function sponsors() {
    	    return $this->belongsToMany('App\Sponsor')->withTimestamps();
    }
}
