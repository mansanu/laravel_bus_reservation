<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    public function travel_details()
    {
        return $this->hasMany('App\TravelDetail');
    }
}
