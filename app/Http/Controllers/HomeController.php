<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
//        $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return Renderable
   */
  public function index()
  {
    $product_m = new Product();

    $latest_products = $product_m->TakeLatest(16);

    if (count($latest_products) % 2 != 0) {
      array_pop($latest_products);
    }

    $sale_products = $product_m->TakeLatestSale(16);

    $categories = DB::table('categories')
      ->where('status', '=', 1)
      ->orderBy('created_at', 'DESC')
      ->take(4)
      ->get();

    $articles = DB::table('articles')
      ->where('status', '=', 1)
      ->orderBy('created_at', 'DESC')
      ->take(6)
      ->get();

    return view('home')
      ->with('categories', $categories)
      ->with('latest_products', $latest_products)
      ->with('sale_products', $sale_products)
      ->with('articles', $articles);
  }

  public function shoppingCart()
  {
    return view('shopping-cart');
  }

  public function checkout()
  {
    return view('checkout');
  }
}
