<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\AppBaseController;
use App\Order;
use App\OrderDetail;
use App\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class OrderController extends AppBaseController
{

  public function index(Request $request)
  {
    $page = $request->input('page', 1);
    $size = $request->input('limit', 10);
    $name = $request->input('name', '');
    $email = $request->input('email', '');
    $phone = $request->input('phone', '');
    $status = $request->input('status');

    try {
      $data = Order::query()
        ->leftJoin('tinhtps', 'orders.city', '=', 'tinhtps.id')
        ->leftJoin('quanhuyens', 'orders.district', '=', 'quanhuyens.id')
        ->leftJoin('xaphuongs', 'orders.ward', '=', 'xaphuongs.id');

      if (isset($name) && $name !== '') {
        $data = $data->where('orders.name', 'like', '%' . $name . '%');
      }

      if (isset($email) && $email !== '') {
        $data = $data->where('orders.email', 'like', '%' . $email . '%');
      }

      if (isset($phone) && $phone !== '') {
        $data = $data->where('orders.phone', '=', $phone);
      }

      if (isset($status)) {
        $data = $data->where('orders.status', $status);
      }

      $data = $data
        ->orderBy('created_at', 'desc')
        ->paginate(
          $size,
          ['orders.*', 'tinhtps.name as city', 'quanhuyens.name as district', 'xaphuongs.name as ward'],
          'page',
          $page
        );

      return $this->sendResponse($data);
    } catch (\Exception $exception) {
      Log::error($exception);
      return $this->sendError($exception->getMessage());
    }
  }

  public function show($id): JsonResponse
  {
    try {
      $data = OrderDetail::query()
        ->where('order_details.order_id', '=', $id)
        ->join('products', 'products.id', '=', 'order_details.product_id')
        ->select('products.images',
          'products.name',
          'products.price',
          'order_details.discount',
          'order_details.quantity')
        ->get();

      return $this->sendResponse($data);
    } catch (\Exception $exception) {
      Log::error($exception);
      return $this->sendError($exception->getMessage());
    }
  }

  public function update(Request $request, $id)
  {
    $order = Order::find($id);
    if (!$order) {
      return $this->sendError('Không tồn tại đơn hàng này');
    }

    DB::beginTransaction();

    try {
      $status = $request->input('status');
      $order->update(['status' => $status]);

      if ($status == 1) {
        $order_detail = OrderDetail::query()
          ->where('order_details.order_id', '=', $id)
          ->get()
          ->toArray();

        foreach ($order_detail as $value) {
          $product = Product::find($value['product_id']);

          $updateProduct = Product::query()
            ->where('id', $value['product_id']);

          $updateProduct->update(['quantity' => $product->quantity - $value['quantity']]);

          $updatedProduct = Product::find($value['product_id']);
          if ($updatedProduct->quantity <= 0) {
            $updateProduct->update(['status' => 0]);
          }
        }
      }

      DB::commit();

      return $this->sendResponse($order);
    } catch (\Exception $exception) {
      DB::rollBack();

      Log::error($exception);
      return $this->sendError($exception->getMessage());
    }
  }

  public function statistical(Request $request)
  {
    $year = $request->input('year', Carbon::now()->format('Y'));
    $data = (object)[];
    $label = [];
    $datasets = [];
    $dataRevenue = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    $dataOrder = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

    try {
      $orders = Order::query()->whereYear('updated_at', $year);

      $revenue = $orders
        ->selectRaw('MONTH(updated_at) as month, sum(total_price) as sum')
        ->orderByRaw('MONTH(updated_at)')
        ->groupBy(DB::raw('MONTH(updated_at)'))
        ->get();

      $orders = $orders
        ->selectRaw('MONTH(updated_at) as month, count(*) as count')
        ->orderByRaw('MONTH(updated_at)')
        ->groupBy(DB::raw('MONTH(updated_at)'))
        ->get();


      for ($i = 1; $i <= 12; $i++) {
        $label[] = 'Tháng ' . $i;
      }

      foreach ($revenue as $item) {
        $dataRevenue[$item->month - 1] = round((int)$item->sum / 1000000, 2);
      }

      foreach ($orders as $item) {
        $dataOrder[$item->month - 1] = (int)$item->count;
      }

      $revenueDatasets['label'] = 'Doanh thu (triệu)';
      $revenueDatasets['backgroundColor'] = '#6380F6';
      $revenueDatasets['data'] = $dataRevenue;
      $revenueDatasets['yAxisID'] = 1;

      $orderDatasets['label'] = 'Đơn hàng (đơn)';
      $orderDatasets['backgroundColor'] = '#698CC2';
      $orderDatasets['data'] = $dataOrder;
      $orderDatasets['yAxisID'] = 2;

      $datasets[] = $revenueDatasets;
      $datasets[] = $orderDatasets;

      $data->labels = $label;
      $data->datasets = $datasets;

      return $this->sendResponse($data);
    } catch (\Exception $exception) {
      Log::error($exception);
      return $this->sendError($exception->getMessage());
    }
  }
}
