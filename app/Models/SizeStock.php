<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SizeStock extends Model
{   
    protected $fillable = ['product_id', 'size', 'stock_left'];

    function product(){
        return $this->belongsTo('App\Models\Product');
    }
}
