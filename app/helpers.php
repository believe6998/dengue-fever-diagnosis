<?php

use Illuminate\Support\Facades\URL;

function get_dynamic_image(array $dynamic_images, string $key, string $default_img)
{
  if (array_key_exists($key, $dynamic_images)) {
    return $dynamic_images[$key]['image'] ? URL::asset('/uploads/images/' . $dynamic_images[$key]['image']) : url('/images/' . $default_img);
  }
  return url('/images/' . $default_img);
}

function get_dynamic_image_content(array $dynamic_images, string $key, string $children_key, string $default_val): string
{
  if (array_key_exists($key, $dynamic_images)) {
    return $dynamic_images[$key][$children_key] ? $dynamic_images[$key][$children_key] : $default_val;
  }
  return $default_val;
}

