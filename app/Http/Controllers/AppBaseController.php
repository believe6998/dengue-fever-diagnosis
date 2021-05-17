<?php

namespace App\Http\Controllers;

use Response;

class AppBaseController extends Controller
{
  public function sendResponse($result, $message = null)
  {
    return response()->json(
      $result,
      200,
      array('Content-Type' => 'application/json; charset=utf8'),
      JSON_UNESCAPED_UNICODE
    );
  }

  public function sendError($error, $code = 500)
  {
    $res = [
      'success' => false,
      'message' => $error,
    ];

    return response()->json(
      $res,
      $code,
      array('Content-Type' => 'application/json; charset=utf8'),
      JSON_UNESCAPED_UNICODE
    );
  }
}
