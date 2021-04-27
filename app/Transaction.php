<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function user()
	{
	      return $this->belongsTo('App\User','user_id', 'id');
	}

	public function transaction_detail() 
	{
	     return $this->hasMany('App\TransactionDetail','transaction_id', 'id');
	}
}
