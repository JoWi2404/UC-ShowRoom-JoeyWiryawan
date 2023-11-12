<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'CustomerID',
        'VehicleID',
        'Quantity',
        'TotalPrice'
    ];

    protected $table = 'orders';

    //Define Relation where Order can only have one Customer 
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    //Define Relation where Order can have many Vehicle
    public function vehicles() 
    {
        return $this->belongsToMany(Vehicle::class);
    }
}
