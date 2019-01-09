<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    public function restaurent(){

    	return $this->hasOne('App\Restaurent');
    	
    }
}
