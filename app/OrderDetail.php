<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'order_details';

    protected $fillable = ['id', 'order_id', 'product_id', 'discount_id', 'quantity', 'status', 'created_at', 'updated_at'];
}
