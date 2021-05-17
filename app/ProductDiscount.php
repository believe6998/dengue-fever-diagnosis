<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDiscount extends Model
{
    protected $table = 'product_discounts';

    protected $fillable = ['id', 'product_id', 'discount_id', 'expired_time', 'status', 'created_at', 'updated_at'];
}
