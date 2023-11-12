<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

use App\Http\Requests\StoreVehicleRequest;
use App\Http\Requests\UpdateVehicleRequest;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get Vehicles 
        $vehicles = Vehicle::all();
        return view('form.vehicleTable', ['form' => $vehicles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('form.createVehicle');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $vehicle_data = Vehicle::create([
            'TypesofVehicle' => $request->TypesofVehicle,
            'Model'=> $request->Model,
            'Year'=> $request->Year,
            'PassengerTotal'=> $request->PassengerTotal,
            'Manufacturer'=> $request->Manufacturer,
            'Price'=> $request->Price,
            'OilType'=> $request->OilType,
            'LuggageSpace'=> $request->LuggageSpace,
            'TireCount'=> $request->TireCount,
            'PassengerSeat'=> $request->PassengerSeat,
            'CargoAreaSize'=> $request->CargoAreaSize,
            'LuggageSize'=> $request->LuggageSize,
            'FuelCapacity'=> $request->FuelCapacity,
        ]);

        return redirect(route('form.vehicleTable'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehicle $vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehicle $vehicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehicle $vehicle)
    {
        //
        $vehicle ->delete();

        return redirect(route('form.vehicleTable'))
        ->with('success', 'Vehicle deleted Successfully');
    }
}
