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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('recipe_title'); #dish name
            $table->longText('recipe_ingredients'); #ingredients
            $table->longText('recipe_description'); #description
            $table->string('recipe_vegan_friendly'); #vegan friendly
            $table->string('recipe_allergents'); #allergents
            $table->string('recipe_tag'); #meal_type
            $table->integer('recipe_time_required'); #time
            $table->string('photo', 300);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
