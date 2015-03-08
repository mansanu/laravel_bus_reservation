<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
	protected $table = 'buses';
	
	public $timestamps = false;
	protected $guarded = array();
	 
	 public function travel_details()
    {
        return $this->hasMany('App\TravelDetail');
    }
}
