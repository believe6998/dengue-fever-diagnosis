<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static find($id)
 */
class DynamicImage extends Model
{
  protected $table = 'dynamic_images';

  protected $fillable = ['id', 'code', 'image', 'url_go_to', 'url_title', 'text1', 'text2', 'text3', 'title', 'status'];
}
