<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\FoodRoutine;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('search');

        // Replace with your search logic
        $results = Recipe::where('recipe_title', 'LIKE', '%' . $query . '%')
            ->orWhere('recipe_ingredients', 'LIKE', '%' . $query . '%')
            ->orWhere('recipe_time_required', 'LIKE', '%' . $query . '%')
            // ->orWhere('recipe_tag', 'LIKE', '%' . $query . '%')
            ->orWhere('recipe_allergents', 'LIKE', '%' . $query . '%')
            ->orWhere('recipe_vegan_friendly', 'LIKE', '%' . $query . '%')
            ->orWhere('recipe_description', 'LIKE', '%' . $query . '%')
            ->get();

        return view('search.results', compact('results', 'query'));
    }

    public function filter(Request $request)
    {
        $query = $request->input('filter');

        // Replace with your search logic
        $results = Recipe::where('recipe_tag', 'LIKE', '%' . $query . '%')
            ->get();

        return view('search.results', compact('results', 'query'));
    }
}
