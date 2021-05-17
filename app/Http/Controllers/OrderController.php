<?php

namespace App\Http\Controllers;

use App\Order;
use App\ResponseData;
use App\Utils\TBot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\JsonResponse
   */
  public function store(Request $request): \Illuminate\Http\JsonResponse
  {
    $productsData = (array)json_decode($request->get('products'));
    $product_ids = array_keys((array)$productsData);
    $products = DB::table('products')->whereIn('id', $product_ids)->get();
    $total_price = 0;

    foreach ($products as $p) {
      $total_price += $p->price * ((100 - $p->discount) / 100) * $productsData[$p->id];
    }

    $order_id = DB::table('orders')->insertGetId(array(
      'name' => $request->get('full_name'),
      'email' => $request->get('email'),
      'phone' => $request->get('phone'),
      'city' => $request->get('city'),
      'district' => $request->get('district'),
      'ward' => $request->get('ward'),
      'address' => $request->get('address'),
      'note' => $request->get('note'),
      'total_price' => $total_price
    ));

    foreach ($products as $p) {
      DB::table('order_details')->insert(array(
        'order_id' => $order_id,
        'product_id' => $p->id,
        'discount' => $p->discount,
        'quantity' => $productsData[$p->id]
      ));
    }

    $tbot = new TBot();
    $tbot->notifyNewOrder(
      $request->get('full_name'),
      $request->get('email'),
      $request->get('phone'),
      $request->get('address'),
      $total_price,
      'https://admin.gosport.vn/orders'
    );

    $response_data = new ResponseData(200, "success", true);
    $status_code = 200;
    return response()->json($response_data, $status_code);
  }

  public function success()
  {
    return view('order_success');
  }

  /**
   * Display the specified resource.
   *
   * @param \App\Order $order
   * @return \Illuminate\Http\Response
   */
  public function show(Order $order)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param \App\Order $order
   * @return \Illuminate\Http\Response
   */
  public function edit(Order $order)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param \Illuminate\Http\Request $request
   * @param \App\Order $order
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Order $order)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param \App\Order $order
   * @return \Illuminate\Http\Response
   */
  public function destroy(Order $order)
  {
    //
  }
}
