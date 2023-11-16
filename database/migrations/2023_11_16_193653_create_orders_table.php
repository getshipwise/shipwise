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
            $table->integer('integration_id');
            $table->integer('customer_id');
            $table->integer('warehouse_id')->nullable();
            $table->string('order_number');
            $table->string('uuid');
            $table->string('ship_to_name');
            $table->string('ship_to_address_1');
            $table->string('ship_to_address_2');
            $table->string('ship_to_city');
            $table->string('ship_to_state');
            $table->string('ship_to_postal_code');
            $table->string('ship_to_country_code')->comment('ISO country code 2-char');
            $table->integer('transit');
            $table->timestamps();
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
