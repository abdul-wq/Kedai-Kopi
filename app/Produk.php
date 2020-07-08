<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
	protected $table = 'produk';

    public function pesananDetail()
    {
    	return $this->belongsTo('App\Pesanandetail', 'pesanan_id', 'id'); //Satu produk hanya boleh chekout 1
    }
}
