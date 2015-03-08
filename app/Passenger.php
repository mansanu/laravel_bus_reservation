<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    public function reservation_details()
    {
        return $this->hasMany('App\ReservationDetail');
    }
	public function purchase_details()
    {
        return $this->hasMany('App\PurchaseDetail');
    }
}
