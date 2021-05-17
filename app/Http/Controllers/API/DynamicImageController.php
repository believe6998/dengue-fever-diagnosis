<?php

namespace App\Http\Controllers\API;

use App\DynamicImage;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DynamicImageController extends AppBaseController
{
  /**
   * Display a listing of the resource.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\JsonResponse
   */
  public function index(Request $request)
  {
    $page = $request->input('page', 1);
    $size = $request->input('limit', 10);
    $code = $request->input('code');
    $status = $request->input('status');

    try {
      $data = DynamicImage::query();

      if (isset($code)) {
        $data = $data->where('code', $code);
      }

      if (isset($status)) {
        $data = $data->where('status', $status);
      }

      $data = $data
        ->orderBy('created_at', 'desc')
        ->paginate($size, ['*'], 'page', $page);

      return $this->sendResponse($data);
    } catch (\Exception $exception) {
      Log::error($exception);
      return $this->sendError($exception->getMessage());
    }
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\JsonResponse
   */
  public function store(Request $request)
  {
    $data = $request->input('data');

//    @todo @trungnq validate + remove old image
//    $validate = $this->_validate($data);
//    if ($validate) {
//      return $validate;
//    }

    try {
      $new = DynamicImage::query()->create($data);

      return $this->sendResponse($new);
    } catch (\Exception $exception) {
      Log::error($exception);
      return $this->sendError($exception->getMessage());
    }
  }

  /**
   * Display the specified resource.
   *
   * @param int $id
   * @return \Illuminate\Http\JsonResponse
   */
  public function show($id)
  {
    try {
      $data = DynamicImage::find($id);
      return $this->sendResponse($data);
    } catch (\Exception $exception) {
      Log::error($exception);
      return $this->sendError($exception->getMessage());
    }
  }

  /**
   * Update the specified resource in storage.
   *
   * @param \Illuminate\Http\Request $request
   * @param int $id
   * @return \Illuminate\Http\JsonResponse
   */
  public function update(Request $request, $id)
  {
    $data = $request->input('data');

    $dynamicImage = DynamicImage::find($id);
    if (!$dynamicImage) {
      return $this->sendError('Không tồn tại dữ liệu này');
    }

//    @todo @trungnq validate + remove old image
//    $validate = $this->_updateValidate($data, $id);
//    if ($validate) {
//      return $validate;
//    }

    DB::beginTransaction();

    try {
      Log::info($data);
      Log::info($data['status']);
      if ($data['status'] == 1) {
        DynamicImage::where('code', $data['code'])->where('status', 1)->update(array('status' => 0));
      }

      $dynamicImage->update($data);
      DB::commit();

      return $this->sendResponse($dynamicImage);
    } catch (\Exception $exception) {
      DB::rollBack();

      Log::error($exception);
      return $this->sendError($exception->getMessage());
    }
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param int $id
   * @return \Illuminate\Http\JsonResponse
   */
  public function destroy($id)
  {
    $data = DynamicImage::find($id);
    if (!$data) {
      return $this->sendError('Không tồn tại dữ liệu này');
    }

    DB::beginTransaction();

    try {
      $data->update(['status' => 0]);;

      DB::commit();

      return $this->sendResponse($data);
    } catch (\Exception $exception) {
      DB::rollBack();

      Log::error($exception);
      return $this->sendError($exception->getMessage());
    }
  }
}
