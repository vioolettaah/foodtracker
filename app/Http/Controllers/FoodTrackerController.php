<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class FoodTrackerController extends Controller
{
    //
    public function index()
    {
        $recipes = Recipe::all();
        return view ('user.recipe')->with('recipes', $recipes);
    }
}
