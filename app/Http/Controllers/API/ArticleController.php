<?php

namespace App\Http\Controllers\API;

use App\Article;
use App\CategoryProduct;
use App\Http\Controllers\AppBaseController;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ArticleController extends AppBaseController
{

  public function index(Request $request)
  {
    $page = $request->input('page', 1);
    $size = $request->input('limit', 10);
    $title = $request->input('title', '');
    $status = $request->input('status');

    try {
      $data = Article::query();

      if (isset($title) && $title !== '') {
        $data = $data->where('title', 'like', '%' . $title . '%');
      }

      if (isset($status)) {
        $data = $data->where('status', $status);
      }

      $data = $data
        ->orderBy('created_at', 'desc')
        ->paginate(
          $size,
          ['id', 'title', 'avatar', 'created_at', 'updated_at', 'status'],
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
      $data['slug'] = Str::slug($data['title']);

      $new = Article::query()->create($data);

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
      $data = Article::find($id);

      return $this->sendResponse($data);
    } catch (\Exception $exception) {
      Log::error($exception);
      return $this->sendError($exception->getMessage());
    }
  }

  public function update(Request $request, $id)
  {
    $data = $request->input('data');

    $article = Article::find($id);
    if (!$article) {
      return $this->sendError('Không tồn tại tin tức này');
    }

    $validate = $this->_updateValidate($data, $id);
    if ($validate) {
      return $validate;
    }

    DB::beginTransaction();

    try {
      $data['slug'] = Str::slug($data['title']);

      $article->update($data);

      DB::commit();

      return $this->sendResponse($article);
    } catch (\Exception $exception) {
      DB::rollBack();

      Log::error($exception);
      return $this->sendError($exception->getMessage());
    }
  }

  public function destroy($id)
  {
    $article = Article::find($id);
    if (!$article) {
      return $this->sendError('Không tồn tại tin tức này');
    }

    DB::beginTransaction();

    try {
      $article->update(['status' => 0]);

      DB::commit();

      return $this->sendResponse($article);
    } catch (\Exception $exception) {
      DB::rollBack();

      Log::error($exception);
      return $this->sendError($exception->getMessage());
    }
  }

  private function _validate(array $data)
  {
    $rules = [
      'title' => 'unique:articles'
    ];
    $messages = [
      'title.unique' => 'Tiêu đề tin tức này đã tồn tại!'
    ];

    $validate = Validator::make($data, $rules, $messages);

    if ($validate->fails()) {
      return $this->sendError($validate->errors(), 422);
    }
  }

  private function _updateValidate(array $data, int $id)
  {
    $rules = [
      'title' => 'unique:articles,title,' . $id,
    ];
    $messages = [
      'title.unique' => 'Tiêu đề tin tức này đã tồn tại!',
    ];

    $validate = Validator::make($data, $rules, $messages);

    if ($validate->fails()) {
      return $this->sendError($validate->errors(), 422);
    }
  }

}
