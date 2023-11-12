<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $customer = Customer::all();
        return view('form.test', ['form' => $customer]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('form.createCustomer');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $customer_data = Customer::create([
            'Name' => $request->Name,
            'Address' => $request->Address,
            'PhoneNumber' => $request->PhoneNumber,
            'IDCard' => $request->IDCard,
        ]);

        return redirect(route('form.test'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //

        return view('form.editCustomer', ['customer' => $customer]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        //
        // $customer ->save();
        // return to_route('form.test');
        
        Customer::where('id', $customer)
        ->update(
            [
                'Name'=> $request->name,
                'Address'=> $request->address,
                'PhoneNumber'=> $request->phone,
                'IDCard'=> $request->IDCard,
            ]
            );

            return redirect()->route('form.test')->with('success','Customer has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
        $customer->delete();

        return redirect()->route('form.test')
        ->with('success', 'Customer Deleted Successfully');

    }
}
