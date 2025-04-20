<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;
    protected $fillable = ['name', 'price', 'description', 'stock', 'manufacturer_id', 'color', 'image'];

    function manufacturer(){
        return $this->belongsTo('App\Models\Manufacturer');
    }

    function stock(){
        return $this->hasMany('App\Models\SizeStock');
    }

    function categories(){
        return $this->belongsToMany('App\Models\Category')->withTimestamps();
    }
}
