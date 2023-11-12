<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = ['Name','Address','PhoneNumber','IDCard'];
    

    //Define Relation where Customer has many Order
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
