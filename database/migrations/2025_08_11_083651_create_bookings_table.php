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
        Schema::create('bookings', function (Blueprint $table) {
    $table->id();
    $table->uuid('uuid')->unique();
    
    $table->foreignId('user_id');
    $table->foreignId('travel_packege_id');
    
    $table->text('address');
    $table->date('start_date');
    $table->date('end_date');
    
    $table->unsignedInteger('adults')->default(0);
    $table->unsignedInteger('teenagers')->default(0)->nullable();
    $table->unsignedInteger('children')->default(0)->nullable();
    
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
