<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurent extends Model
{
    public function district(){

    	return $this->belongsTo('App\District');

    }

    public function sector(){

    	return $this->belongsTo('App\Sector');

    }

    public function province(){

    	return $this->belongsTo('App\Province');

    }


}
