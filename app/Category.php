<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static find($id)
 * @method static create(array $array)
 */
class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['id', 'name', 'slug', 'description', 'parent_id', 'status', 'created_at', 'updated_at'];
}
