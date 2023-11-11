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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('CustomerID');
            $table->unsignedBigInteger('VehicleID');
            $table->integer('Quantity');
            $table->decimal('TotalPrice', 10, 2);
            $table->timestamps();

            $table->foreign('CustomerID')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('VehicleID')->references('id')->on('vehicles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
