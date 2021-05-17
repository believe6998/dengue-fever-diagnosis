<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static find($id)
 */
class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = ['id', 'name', 'email', 'phone', 'address', 'address_2', 'note', 'total_price', 'status', 'created_at', 'updated_at'];
}
