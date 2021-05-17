<?php

namespace App\Http\Controllers\API;

use App\CategoryProduct;
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

class ProductController extends AppBaseController
{

  public function index(Request $request)
  {
    $page = $request->input('page', 1);
    $size = $request->input('limit', 10);
    $name = $request->input('name', '');
    $discount = $request->input('discount');
    $quantity = $request->input('quantity');
    $status = $request->input('status');
    $category_id = $request->input('categoryId');

    try {
      $data = Product::query();

      if (isset($name) && $name !== '') {
        $data = $data->where('products.name', 'like', '%' . $name . '%');
      }

      if (isset($quantity)) {
        $data = $data->where('products.quantity', '=', $quantity);
      }

      if (isset($discount)) {
        $data = $data->where('products.discount', '=', $discount);
      }

      if (isset($category_id)) {
        $data = $data
          ->leftJoin('category_products', 'products.id', '=', 'category_products.product_id')
          ->leftJoin('categories', 'categories.id', '=', 'category_products.category_id')
          ->where('categories.id', $category_id);
      }

      if (isset($status)) {
        $data = $data->where('products.status', $status);
      }

      $data = $data
        ->orderBy('created_at', 'desc')
        ->paginate(
          $size,
          ['products.*'],
          'page',
          $page
        );

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

      $new = Product::query()->create($data);

      foreach ($data['category_ids'] as $value) {
          $insert['category_id'] = $value;
          $insert['product_id'] = $new->id;
          CategoryProduct::query()->create($insert);
      }

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
      $data = Product::find($id);
      $category_ids = CategoryProduct::query()
        ->join('categories', 'categories.id', '=', 'category_products.category_id')
        ->where('category_products.product_id', $id)
        ->pluck('categories.id')
        ->toArray();

      $data['category_ids']  = (isset($category_ids) && is_array($category_ids)) ? $category_ids : null;
      return $this->sendResponse($data);
    } catch (\Exception $exception) {
      Log::error($exception);
      return $this->sendError($exception->getMessage());
    }
  }

  public function update(Request $request, $id)
  {
    $data = $request->input('data');

    $product = Product::find($id);
    if (!$product) {
      return $this->sendError('Không tồn tại sản phẩm này');
    }

    $validate = $this->_updateValidate($data, $id);
    if ($validate) {
      return $validate;
    }

    DB::beginTransaction();

    try {
      $data['slug'] = Str::slug($data['name']);

      $product->update($data);

      $category_ids = $data['category_ids'];

      CategoryProduct::query()
        ->where('product_id', $id)
        ->whereNotIn('category_id', $category_ids)
        ->delete();

      $current_category_products = CategoryProduct::query()->where('product_id', $id)
        ->pluck('category_id')
        ->toArray();

      foreach ($category_ids as $value) {
        if (!in_array($value, $current_category_products)) {
          $insert['category_id'] = $value;
          $insert['product_id'] = $id;
          CategoryProduct::query()->create($insert);
        }
      }

      DB::commit();

      return $this->sendResponse($product);
    } catch (\Exception $exception) {
      DB::rollBack();

      Log::error($exception);
      return $this->sendError($exception->getMessage());
    }
  }

  public function destroy($id)
  {
    $category = Product::find($id);
    if (!$category) {
      return $this->sendError('Không tồn tại sản phẩm này');
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

  private function _validate(array $data)
  {
    $rules = [
      'name' => 'unique:products',
    ];
    $messages = [
      'name.unique' => 'Tên sản phẩm này đã tồn tại!'
    ];

    $validate = Validator::make($data, $rules, $messages);

    if ($validate->fails()) {
      return $this->sendError($validate->errors(), 422);
    }
  }

  private function _updateValidate(array $data, int $id)
  {
    $rules = [
      'name' => 'unique:products,name,' . $id,
    ];
    $messages = [
      'name.unique' => 'Tên sản phẩm này đã tồn tại!',
    ];

    $validate = Validator::make($data, $rules, $messages);

    if ($validate->fails()) {
      return $this->sendError($validate->errors(), 422);
    }
  }

}
