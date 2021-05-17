<?php

namespace App\Http\Controllers;

use App\ResponseData;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdministrativeUnits extends Controller
{
  public function tinhTp(Request $request): JsonResponse
  {
    $tinhtps = DB::table('tinhtps')->get();
    $response_data = new ResponseData(200, "success", $tinhtps);
    $status_code = 200;
    return response()->json($response_data, $status_code);
  }

  public function quanHuyen(Request $request, $parent_code): JsonResponse
  {
    $quanhuyens = DB::table('quanhuyens')->where('parent_code', '=', $parent_code)->get();
    $response_data = new ResponseData(200, "success", $quanhuyens);
    $status_code = 200;
    return response()->json($response_data, $status_code);
  }

  public function xaPhuong(Request $request, $parent_code): JsonResponse
  {
    $xaphuongs = DB::table('xaphuongs')->where('parent_code', '=', $parent_code)->get();
    $response_data = new ResponseData(200, "success", $xaphuongs);
    $status_code = 200;
    return response()->json($response_data, $status_code);
  }
}
