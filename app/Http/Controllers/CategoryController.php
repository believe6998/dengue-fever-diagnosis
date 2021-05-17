<?php

namespace App\Http\Controllers;

use App\Category;
use App\ResponseData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends AppBaseController
{
  ////////////////////////////////////////////////////////////////////////////////////////////////////
  /// API <-

  /**
   * Take list of the resource with pagination.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\JsonResponse
   */
  public function apiTake(Request $request)
  {
    $page = $request->get('page');
    $size = $request->get('limit');
    $orderBy = $request->get('order-by');
    $status = $request->get('status');

    if (!isset($page) || $page <= 0) {
      $page = 1;
    }
    if (!isset($size) || $size <= 0) {
      $size = 10;
    }
    if (!isset($orderBy) || (strtolower($orderBy) != 'asc' && strtolower($orderBy) != 'desc')) {
      $orderBy = 'desc';
    }
    if (!isset($status) || ($status != 0 && $status != 1)) {
      $status = 1;
    }
    $skip = $size * ($page - 1);

    $categories = Category::query();

    if (isset($status)) {
      $categories = $categories->where('status', '=', $status);
    }

    $categories = $categories->orderBy('created_at', $orderBy)->skip($skip)->take($size)->get();

    $response_data = new ResponseData(200, "success", $categories);
    $status_code = 200;
    return response()->json($response_data, $status_code);
  }

  /**
   * Take all of the resource.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\JsonResponse
   */
  public function apiTakeAll(Request $request)
  {
    $orderBy = $request->get('order-by');
    $status = $request->get('status');

    if (!isset($orderBy) || (strtolower($orderBy) != 'asc' && strtolower($orderBy) != 'desc')) {
      $orderBy = 'desc';
    }
    if (!isset($status) || ($status != 0 && $status != 1)) {
      $status = 1;
    }

    $categories = Category::query();

    if (isset($status)) {
      $categories = $categories->where('status', '=', $status);
    }

    $categories = $categories->orderBy('created_at', $orderBy)->get();

    $response_data = new ResponseData(200, "success", $categories);
    $status_code = 200;
    return response()->json($response_data, $status_code);
  }

}
