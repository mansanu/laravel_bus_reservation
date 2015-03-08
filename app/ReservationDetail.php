<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservationDetail extends Model
{
     public function travel_details()
    {
        return $this->belongsTo('App\TravelDetail');
    }
	public function purchase_details()
    {
        return $this->belongsTo('App\PurchaseDetail');
    }
	public function passengers()
    {
        return $this->belongsTo('App\Passenger');
    }
}
