<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

//Intervention Image
use Illuminate\Support\Facades\Storage;

//Laravel Filesystem

class ImageController extends AppBaseController
{
  public function store(Request $request, $patch)
  {
    $data = [];
    if ($request->hasFile('images')) {
      foreach ($request->file('images') as $file) {
        //get filename with extension
        $file_name_with_extension = $file->getClientOriginalName();

        //get filename without extension
        $filename = pathinfo($file_name_with_extension, PATHINFO_FILENAME);

        //get file extension
        $extension = $file->getClientOriginalExtension();

        //filename to store
        $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
        $filename = preg_replace("/\s+/", '-', $filename);
        $file_name_to_store = $filename . '_' . time() . '.' . $extension;

        //Resize image here
        $image = Image::make($file)->encode('jpg');

        // Put image to storage
        Storage::put("public/images/$patch/$file_name_to_store", $image);
        $data[] = "{$patch}/{$file_name_to_store}";

      }
    }

    return response()->json(
      $data,
      200,
      array('Content-Type' => 'application/json; charset=utf8'),
      JSON_UNESCAPED_UNICODE
    );
  }

  public function resize($size, $patch, $imagePath)
  {
    $imageFullPath = public_path("uploads/images/$patch/$imagePath");
    $sizes = config('image.sizes');
    if (!file_exists($imageFullPath) || !isset($sizes[$size])) {
      abort(404);
    }

    $image_patch = public_path("uploads/images/$patch/$size/$imagePath");

    if (file_exists($image_patch)){
      return Image::make($image_patch)->response();
    }

    $width = $sizes[$size][0];
    $height = $sizes[$size][1];

    $image = Image::make($imageFullPath)->resize($width, $height)->encode('jpg');

    // Put image to storage
    Storage::put("public/images/$patch/$size/$imagePath", $image);

    return $image->response();
  }
}
