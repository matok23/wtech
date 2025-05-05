<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;
    protected $fillable = ['name', 'price', 'description', 'stock', 'manufacturer_id', 'color', 'image'];

    public function manufacturer(){
        return $this->belongsTo('App\Models\Manufacturer');
    }

    public function stock(){
        return $this->hasMany('App\Models\SizeStock');
    }

    public function categories(){
        return $this->belongsToMany('App\Models\Category')->withTimestamps();
    }

    public function images(){
        return $this->hasMany('App\Models\Image');
    }
}
