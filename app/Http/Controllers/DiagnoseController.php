<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\DB;

class DiagnoseController extends Controller
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
    return view('diagnose');
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
