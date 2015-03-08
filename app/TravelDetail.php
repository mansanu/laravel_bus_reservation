<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class TravelDetail extends Model
{
   	 public function buses()
    {
        return $this->belongsTo('App\Bus');
    }
	 public function routes()
    {
        return $this->belongsTo('App\Route');
    }
	 public function freq_details()
    {
        return $this->belongsTo('App\FreqDetail');
    }
	 public function reservation_details()
    {
        return $this->hasMany('App\ReservationDetail');
    }
}
