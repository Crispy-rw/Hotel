<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function user(){

    	return $this->belongsTo('App\User');

    }


    public function coupon(){

    	return $this->belongsTo('App\Coupon');
    	
    }



    public function room(){

    	return $this->belongsTo('App\Room');

    }
}
