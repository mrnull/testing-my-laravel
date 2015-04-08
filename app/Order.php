<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {

	//
	public function seller()
    {
        return $this->belongsTo('App\Seller');
    }

    public function getTotalAttribute(){
    	return $this->product_amount + $this->delivery_amount + $this->comission_amount;
    }

}
