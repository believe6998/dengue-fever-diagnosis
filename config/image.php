<?php

return [

  /*
  |--------------------------------------------------------------------------
  | Image Driver
  |--------------------------------------------------------------------------
  |
  | Intervention Image supports "GD Library" and "Imagick" to process images
  | internally. You may choose one of them according to your PHP
  | configuration. By default PHP's "GD Library" implementation is used.
  |
  | Supported: "gd", "imagick"
  |
  */

  'driver' => 'gd',

  'sizes' => [
    'extra_small' => [50, 50],
    'small' => [150, 150],
    'medium' => [285, 285],
    'large' => [570, 570],
    'extra_large' => [870, 870]
  ],

  'image_code' => [
    'banner_about_us' => 'banner_about_us',
    'banner_about_us' => 'banner_about_us',
  ]

];
