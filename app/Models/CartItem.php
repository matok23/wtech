<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{

   // Specify the fields that can be mass-assigned
   protected $fillable = ['amount', 'product_id', 'user_id', 'session_id', 'size'];


    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');  // Explicit foreign key
    }
    
    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'product_id');  // Explicit foreign key
    }

    public function getTotalPrice()
{
    return $this->amount * $this->product->price;
}

}
