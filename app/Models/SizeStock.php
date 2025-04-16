<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SizeStock extends Model
{
    function product(){
        return $this->belongsTo('App\Models\Product');
    }
}
