<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_id', 
        'client_name', 
        'phone_number', 
        'product_code', 
        'final_price', 
        'quantity'
    ];

    // If necessary, define relationships here (e.g., belongsTo Product)

public function product()
{
    return $this->belongsTo(Product::class, 'product_code', 'product_code');
}
}