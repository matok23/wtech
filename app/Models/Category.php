<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    function products(){
        return $this->belongsToMany('App\Models\Product')->withTimestamps();
    }
}
