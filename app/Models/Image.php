<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    protected $fillable=[
        'url',
        'type',
    ];

    protected static function booted()
    {
        static::deleting(function ($image) {
            if (Storage::disk('public')->exists($image->url)) {
                Storage::disk('public')->delete($image->url);
            }
        });
    }

    public function product(){
        return $this->belongsTo('App\Models\Product');
    }
}
