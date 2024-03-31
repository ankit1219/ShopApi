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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('Shop_name');
            $table->string('Shop_pan');
            $table->string('Shop_phone_No');
            $table->string('Shop_licence_No');
            $table->boolean('Shop_active')->default(true); // Boolean for active/inactive status
            $table->string('Shop_status'); // You might want to change this to enum if there are specific statuses
            $table->string('Shop_address');
            $table->string('Shop_type'); // Changed from 'Shope_type' to 'Shop_type'
            $table->date('Shope_open_date');
            $table->time('Shope_open_time');
            $table->time('Shope_Closed_Time');
            $table->string('Shope_Event')->nullable(); // Nullable string field for event
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};
