<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $table = 'discounts';

    protected $fillable = ['id', 'title', 'show_price', 'percent', 'expired_time', 'status', 'created_at', 'updated_at'];
}
