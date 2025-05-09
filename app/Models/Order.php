<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = [
        'user_id',
        'status',
        'session_id',
        // sem pridaj ďalšie, ktoré povoľuješ
    ];
    
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function items(){
        return $this->hasMany('App\Models\OrderItem');
    }
}
