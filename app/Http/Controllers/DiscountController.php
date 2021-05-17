<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Discount;
use App\ResponseData;
use Illuminate\Http\Request;

class DiscountController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function show(Discount $discount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function edit(Discount $discount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Discount $discount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discount $discount)
    {
        //
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////
    /// API <-

    /**
     * Take list of the resource with pagination.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function apiTake(Request $request)
    {
        $page = $request->get('page');
        $size = $request->get('size');
        $orderBy = $request->get('order-by');
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

        $discount = Discount::query();

        if (isset($status)) {
            $discount = $discount->where('status', '=', $status);
        }

        $discount = $discount->orderBy('created_at', $orderBy)->skip($skip)->take($size)->get();

        $response_data = new ResponseData(200, "success", $discount);
        $status_code = 200;
        return response()->json($response_data, $status_code);
    }

    /**
     * Take all of the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function apiTakeAll(Request $request)
    {
        $orderBy = $request->get('order-by');
        $status = $request->get('status');

        if (!isset($orderBy) || (strtolower($orderBy) != 'asc' && strtolower($orderBy) != 'desc')) {
            $orderBy = 'desc';
        }
        if (!isset($status) || ($status != 0 && $status != 1)) {
            $status = 1;
        }

        $discount = Discount::query();

        if (isset($status)) {
            $discount = $discount->where('status', '=', $status);
        }

        $discount = $discount->orderBy('created_at', $orderBy)->get();

        $response_data = new ResponseData(200, "success", $discount);
        $status_code = 200;
        return response()->json($response_data, $status_code);
    }
}
