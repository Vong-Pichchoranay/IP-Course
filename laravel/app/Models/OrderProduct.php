<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $fillable = ['order_id','product_id','price','quantity'];

    public function Product(){
        return $this->belongsTo(Product::class);
    }
    public function Order(){
        return $this->belongsTo(Order::class);
    }
}
