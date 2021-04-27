<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    public function product()
	{
	      return $this->belongsTo('App\Product','product_id', 'id');
	}

	public function transaction()
	{
	      return $this->belongsTo('App\Transaction','transaction_id', 'id');
	}
}
