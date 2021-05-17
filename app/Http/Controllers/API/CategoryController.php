<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\AppBaseController;
use App\Category;
use App\Product;
use App\ResponseData;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CategoryController extends AppBaseController
{

  public function index(Request $request)
  {
    $page = $request->input('page', 1);
    $size = $request->input('size', 10);
    $name = $request->input('name', '');
    $status = $request->input('status');
    $parent_id = $request->input('parentId');

    try {
      $data = Category::query();

      if (isset($name) && $name !== '') {
        $data = $data->where('categories.name', 'like', '%' . $name . '%');
      }

      if (isset($parent_id)) {
        $data = $data->where('categories.parent_id', $parent_id);
      }

      if (isset($status)) {
        $data = $data->where('categories.status', $status);
      }

      $data = $data
        ->leftJoin('categories as c', 'c.id', '=', 'categories.parent_id')
        ->orderBy('created_at')
        ->paginate($size, ['categories.*', 'c.name as parent_name'], 'page', $page);

      return $this->sendResponse($data);
    } catch (\Exception $exception) {
      Log::error($exception);
      return $this->sendError($exception->getMessage());
    }
  }

  public function store(Request $request)
  {
    $data = $request->input('data');

    $validate = $this->_validate($data);
    if ($validate) {
      return $validate;
    }

    DB::beginTransaction();

    try {
      $data['slug'] = Str::slug($data['name']);

      $new = Category::query()->create($data);

      DB::commit();

      return $this->sendResponse($new);
    } catch (\Exception $exception) {
      DB::rollBack();

      Log::error($exception);
      return $this->sendError($exception->getMessage());
    }

  }

  public function show($id): JsonResponse
  {
    try {
      $data = Category::find($id);
      return $this->sendResponse($data);
    } catch (\Exception $exception) {
      Log::error($exception);
      return $this->sendError($exception->getMessage());
    }
  }

  public function update(Request $request, $id)
  {
    $data = $request->input('data');

    $category = Category::find($id);
    if (!$category) {
      return $this->sendError('Không tồn tại danh mục này');
    }

    $validate = $this->_updateValidate($data, $id);
    if ($validate) {
      return $validate;
    }

    DB::beginTransaction();

    try {
      $data['slug'] = Str::slug($data['name']);
      $category->update($data);

      DB::commit();

      return $this->sendResponse($category);
    } catch (\Exception $exception) {
      DB::rollBack();

      Log::error($exception);
      return $this->sendError($exception->getMessage());
    }
  }

  public function destroy($id)
  {
    $category = Category::find($id);
    if (!$category) {
      return $this->sendError('Không tồn tại danh mục này');
    }

    DB::beginTransaction();

    try {
      $category->update(['status' => 0]);;

      DB::commit();

      return $this->sendResponse($category);
    } catch (\Exception $exception) {
      DB::rollBack();

      Log::error($exception);
      return $this->sendError($exception->getMessage());
    }
  }

  public function allParent()
  {
    try {
      $data = Category::query()
        ->where('parent_id', 0)
        ->orderBy('name')
        ->get();
      return $this->sendResponse($data);
    } catch (\Exception $exception) {
      Log::error($exception);
      return $this->sendError($exception->getMessage());
    }
  }

  public function all()
  {
    try {
      $data = Category::query()
        ->orderBy('name')
        ->get();
      return $this->sendResponse($data);
    } catch (\Exception $exception) {
      Log::error($exception);
      return $this->sendError($exception->getMessage());
    }
  }

  private function _validate(array $data)
  {
    $rules = [
      'name' => 'required|unique:categories',
      'description' => 'required'
    ];
    $messages = [
      'name.required' => 'Tên danh mục không được để trống!',
      'name.unique' => 'Tên danh mục này đã tồn tại!',
      'description.required' => 'Chi tiết danh mục không được để trống!'
    ];

    $validate = Validator::make($data, $rules, $messages);

    if ($validate->fails()) {
      return $this->sendError($validate->errors(), 422);
    }
  }

  private function _updateValidate(array $data, int $id)
  {
    $rules = [
      'name' => 'required|unique:categories,name,' . $id,
      'description' => 'required'
    ];
    $messages = [
      'name.required' => 'Tên danh mục không được để trống!',
      'name.unique' => 'Tên danh mục này đã tồn tại!',
      'description.required' => 'Chi tiết danh mục không được để trống!'
    ];

    $validate = Validator::make($data, $rules, $messages);

    if ($validate->fails()) {
      return $this->sendError($validate->errors(), 422);
    }
  }

}
