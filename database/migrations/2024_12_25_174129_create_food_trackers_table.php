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
        Schema::create('food_trackers', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            // $table->string('meal_type');//mau bikin dropdown
            $table->string('meal_name');
            $table->text('short_description');
            // $table->string('image'); ini nanti upload foto
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_trackers');
    }
};
