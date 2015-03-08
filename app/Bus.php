<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
	 public function travel_details()
    {
        return $this->hasMany('App\TravelDetail');
    }
}
