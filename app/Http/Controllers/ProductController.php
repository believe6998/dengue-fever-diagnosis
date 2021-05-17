<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\ResponseData;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class ProductController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @param Request $request
   * @return Application|Factory|Response|View
   */
  public function index(Request $request)
  {
    $config = array(
      'min_price' => 0,
      'max_price' => 99000000,
      'sorts' => array('Mặc định', 'Giá: cao tới thấp', 'Giá: thấp tới cao')
    );
    $filter = array(
      'category' => $request->get('category') ?? 0,
      'brands' => $request->get('brands') ?? array(),
      'min_price' => $request->get('min_price') ?? 0,
      'max_price' => $request->get('max_price') ?? 99000000,
      'orderby' => $request->get('orderby') ?? 0,
    );

    $brands = DB::table('brands')->get();
    $products = DB::table('products');
    if ($filter['category'] !== 0) {
      $products = $products
        ->join('category_products', 'products.id', '=', 'category_products.product_id')
        ->select('products.*')
        ->where('category_products.category_id', $filter['category']);
    }

    if (!empty($filter['brands'])) {
      $products->whereIn('brand', $filter['brands']);
    }

    $products->whereBetween('price', [$filter['min_price'], $filter['max_price']]);

    switch ($filter['orderby']) {
      case 0:
        $products->orderBy('created_at', 'DESC');
        break;
      case 1:
        $products->orderBy('price', 'DESC');
        break;
      case 2:
        $products->orderBy('price', 'ASC');
        break;
      default:
        break;
    }

    $products = $products->paginate(12);

    $products->getCollection()->transform(function ($p) {
      $images = explode(';', $p->images);
      $p->thumbnail = $images[0];
      $p->compare_price = $p->price;
      $p->price = $p->price * ((100 - $p->discount) / 100);
      $p->cover_thumbnail = isset($images[1]) ? $images[1] : $images[0];
      return $p;
    });
    return view('products', compact('products', 'brands', 'filter', 'config'));
  }

  /**
   * Display a listing of the resource.
   *
   * @param $slug
   * @return View
   */
  public function detail($slug)
  {
    // @todo @trungnq
    // them status cho category_products
    $product_m = new Product();

    $product = $product_m->GetBySlug($slug);

    if ($product == null) {
      $related_products = $product_m->TakeLatest(16);
      return view('product-detail')->with('related_products', $related_products);
    }

    $product_id = $product->id;

    $categories = DB::table('categories')
      ->select('categories.id', 'categories.name', 'categories.slug')
      ->join('category_products', 'categories.id', '=', 'category_products.category_id')
      ->where('category_products.product_id', '=', $product_id)
      // ->where('categories.status', '=', 1)
      // ->where('category_products.status', '=', 1)
      ->get();

    $array_category = array();
    foreach ($categories as $category) {
      $array_category[] = $category->id;
    }
    $related_products = $product_m->TakeLatestByCategories($array_category, 8);

    return view('product-detail')
      ->with('product', $product)
      ->with('categories', $categories)
      ->with('related_products', $related_products);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param Request $request
   * @return Response
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param \App\Product $product
   * @return Response
   */
  public function show(Product $product)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param \App\Product $product
   * @return Response
   */
  public function edit(Product $product)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param Request $request
   * @param \App\Product $product
   * @return Response
   */
  public function update(Request $request, Product $product)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param \App\Product $product
   * @return Response
   */
  public function destroy(Product $product)
  {
    //
  }

  ////////////////////////////////////////////////////////////////////////////////////////////////////
  /// API <-
  public function apiGetOne(Request $request, $id): JsonResponse
  {
    $product = DB::table('products')->find($id);
    if (!isset($product)) {
      Log::info($id);
    }
    $product->price = floor($product->price * (100 - ($product->discount / 100)));
    $response_data = new ResponseData(200, "success", $product);
    $status_code = 200;
    return response()->json($response_data, $status_code);
  }

  /**
   * Take list of the resource with pagination.
   *
   * @param Request $request
   * @return JsonResponse
   */
  public function apiTake(Request $request)
  {
    $page = $request->get('page');
    $size = $request->get('size');
    $orderBy = $request->get('order-by');
    $categoryID = $request->get('category-id');
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

    $products = DB::table('products');

    if (isset($categoryID)) {
      $products = $products
        ->join('category_products', 'products.id', '=', 'category_products.product_id')
        ->where('category_products.category_id', $categoryID);
    }
    if (isset($status)) {
      $products = $products->where('products.status', '=', $status);
    }

    $products = $products->select('products.*')
      ->orderBy('created_at', $orderBy)
      ->skip($skip)->take($size)->get();

    $response_data = new ResponseData(200, "success", $products);
    $status_code = 200;
    return response()->json($response_data, $status_code);
  }

  /**
   * Take all of the resource.
   *
   * @param Request $request
   * @return JsonResponse
   */
  public function apiTakeAll(Request $request)
  {
    $orderBy = $request->get('order-by');
    $categoryID = $request->get('category-id');
    $status = $request->get('status');

    if (!isset($orderBy) || (strtolower($orderBy) != 'asc' && strtolower($orderBy) != 'desc')) {
      $orderBy = 'desc';
    }
    if (!isset($status) || ($status != 0 && $status != 1)) {
      $status = 1;
    }

    $products = DB::table('products');

    if (isset($categoryID)) {
      $products = $products
        ->join('category_products', 'products.id', '=', 'category_products.product_id')
        ->where('category_products.category_id', $categoryID);
    }
    if (isset($status)) {
      $products = $products->where('products.status', '=', $status);
    }

    $products = $products->select('products.*')
      ->orderBy('created_at', $orderBy)
      ->get();

    $response_data = new ResponseData(200, "success", $products);
    $status_code = 200;
    return response()->json($response_data, $status_code);
  }
}
