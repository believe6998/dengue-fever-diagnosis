<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * @method static find($id)
 */
class Product extends Model
{
  protected $table = 'products';

  protected $fillable = ['id', 'slug', 'name', 'description', 'images', 'price', 'discount', 'quantity', 'status', 'created_at', 'updated_at'];

  ////////////////////////////////////////////////////////////////////////////////////////////////////
  /// method <-

  public function GetBySlug($slug)
  {
    $products = DB::table($this->table)
      ->where('slug', '=', $slug)
      ->where('status', '=', 1)
      ->take(1)
      ->get();
    if (count($products) == 0) {
      return null;
    }
    return $this->convToResProduct($products[0]);
  }

  public function TakeLatest($limit): array
  {
    if ($limit == null || $limit < 0) {
      $limit = 16;
    }
    $products = DB::table($this->table)
      ->where('status', '=', 1)
      ->orderBy('created_at', 'DESC')
      ->take($limit)
      ->get();
    return $this->convToResProducts($products);
  }

  public function TakeLatestSale($limit): array
  {
    if ($limit == null || $limit < 0) {
      $limit = 16;
    }
    $products = DB::table($this->table)
      ->where('status', '=', 1)
      ->where('discount', '>', 0)
      ->orderBy('created_at', 'DESC')
      ->take($limit)
      ->get();
    return $this->convToResProducts($products);
  }

  public function TakeLatestByCategories($array_category, $limit): array
  {
    if (!is_array($array_category) || count($array_category) == 0) {
      return array();
    }
    if ($limit == null || $limit < 0) {
      $limit = 16;
    }
    $products = DB::table('products')
      ->select('products.id', 'products.name', 'products.slug', 'products.images', 'products.price', 'products.discount')
      ->join('category_products', 'products.id', '=', 'category_products.product_id')
      ->whereIn('category_products.category_id', $array_category)
      ->where('products.status', '=', 1)
      ->orderBy('products.created_at', 'DESC')
      ->take($limit)->get();
    return $this->convToResProducts($products);
  }

  ////////////////////////////////////////////////////////////////////////////////////////////////////
  /// helper func <-

  private function convToResProduct($product)
  {
    $product->images = explode(';', $product->images);
    if ($product->discount > 0 && $product->discount <= 100) {
      $product->compare_price = $product->price;
      $product->price = round($product->price*(100-$product->discount)/100, -2);
    } else {
      $product->compare_price = 0;
    }
    return $product;
  }

  private function convToResProducts($products): array
  {
    $array_product = array();
    foreach ($products as $product) {
      $array_product[] = $this->ConvToResProduct($product);
    }
    return $array_product;
  }
}
