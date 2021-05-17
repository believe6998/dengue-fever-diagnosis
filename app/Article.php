<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static find($id)
 */
class Article extends Model
{
  protected $table = 'articles';

  protected $fillable = ['id', 'slug', 'title', 'avatar', 'content_review', 'content', 'status', 'created_at', 'updated_at'];
}
