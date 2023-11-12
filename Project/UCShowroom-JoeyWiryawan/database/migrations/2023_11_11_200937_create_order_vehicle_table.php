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
        Schema::create('order_vehicle', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('vehicle_id');
            $table->unsignedBigInteger('quantity');
            $table->unsignedBigInteger('totalprice');
            // Add any additional columns you might need for this relationship
    
            $table->foreign('customer_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('vehicle_id')->references('id')->on('vehicles')->onDelete('cascade');
    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_vehicle');
    }
};
