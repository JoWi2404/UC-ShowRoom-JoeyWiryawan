<?php

namespace App\Http\Controllers;

use Illuminate\View\View;


use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $form = Order::all();
        return view('form.orderTable', ['form' => $form]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $vehicle = Vehicle::all();
        $customer = Customer::all();
        return view('form.createOrder', ['customers' => $customer], ['vehicles' => $vehicle]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $order_data = Order::create([
            'order_id' => $request -> order_id,
            'vehicle_id' => $request -> vehicle_id
        ]);

        return redirect(route('order.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
