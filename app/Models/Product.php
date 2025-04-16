<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    function manufacturer(){
        return $this->belongsTo('App\Models\Manufacturer');
    }

    function stock(){
        return $this->hasMany('App\Models\SizeStock');
    }
}
