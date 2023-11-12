<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'TypesofVehicle', 
        'Model',
        'Year',
        'PassengerTotal',
        'Manufacturer',
        'Price',
        'OilType',
        'LuggageSpace',
        'TireCount',
        'PassengerSeat',
        'CargoAreaSize',
        'LuggageSize',
        'FuelCapacity',
        'VehicleImage'
    ];
    
    //Define Relation where Vehicle have many Order
    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
