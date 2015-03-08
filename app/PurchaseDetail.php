<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseDetail extends Model
{
    public function reservation_details()
    {
        return $this->hasMany('App\ReservationDetail');
    }
	public function passengers()
    {
        return $this->belongsTo('App\Passenger');
    }
}
