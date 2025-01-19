<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recipe extends Model
{
    // use HasFactory;
    protected $table = 'recipes';
    protected $primaryKey = 'id';
    protected $fillable = ['recipe_title', 'recipe_ingredients', 'recipe_description', 'recipe_vegan_friendly', 'recipe_allergents', 'recipe_tag', 'recipe_time_required', 'photo'];
}

