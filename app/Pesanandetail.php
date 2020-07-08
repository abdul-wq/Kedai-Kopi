<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanandetail extends Model
{
    protected $table = 'pesanandetail';

    public function produk()
    {
    	return $this->belongsTo('App\Produk', 'produk_id', 'id');  //Satu checkout hanya boleh 1 produk
    }
}
