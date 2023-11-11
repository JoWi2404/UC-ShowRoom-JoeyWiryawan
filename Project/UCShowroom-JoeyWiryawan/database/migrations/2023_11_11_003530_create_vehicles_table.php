<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->char('TypesofVehicle');
            $table->string('Model');
            $table->integer('Year');
            $table->integer('PassengerSize');
            $table->string('Manufacture');
            $table->string('Price');
            $table->string('OilType')->nullable();
            $table->string('LuggageSpace')->nullable();
            $table->integer('TireCount')->nullable();
            $table->string('CargoAreaSize')->nullable();
            $table->string('LuggageSize')->nullable();
            $table->string('FuelCapacity')->nullable();
            $table->string('VehicleImage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
