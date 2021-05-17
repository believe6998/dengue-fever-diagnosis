<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static whereNotIn(string $string, mixed $get)
 * @method static whereIn(string $string, mixed $category_ids)
 * @method static insert(array $data)
 */
class CategoryProduct extends Model
{
    protected $table = 'category_products';

    protected $fillable = ['id', 'product_id', 'category_id', 'status', 'created_at', 'updated_at'];
}
