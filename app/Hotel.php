<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = ['name','description','country_id','province_id','district_id','sector_id','website','phone','background_image','cover_image','star'];

    public function Country(){

    	return $this->belongsTo("App\Country");

    }

    public  function Province(){

    	return $this->belongsTo("App\Province");

    }

    public  function District(){

    	return $this->belongsTo("App\District");

    }

    public  function Sector(){

    	return $this->belongsTo("App\Sector");

    }
}

