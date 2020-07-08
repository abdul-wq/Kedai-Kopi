<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
   
	protected $table = 'pesanan';

	public function user()
	{
		return $this->hasMany('App\User', 'user_id', 'id'); 
	}
  

    public function pesanan_detail()
    {
    	return $this->hasMany('App\Pesanandetail', 'pesanan_id', 'id'); //boleh banyak
    }
}
