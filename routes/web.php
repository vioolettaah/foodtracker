<?php

use App\Http\Controllers\FoodRoutineController;
use App\Http\Controllers\FoodTrackerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\SearchController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

// Route::get('/ChickenWaw', function () {
//     return view('ChickenWaw');
// });

Route::resource("/recipes", RecipeController::class);

Route::resource("/user/recipe", FoodTrackerController::class);

Route::resource("/user/foodroutine", FoodRoutineController::class);

Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::get('/filter', [SearchController::class, 'filter'])->name('filter');

Route::get("/recipedetails/{recipe_title}", [RecipeController::class, 'recipedetails'])->name('recipedetails.show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::post('/logout', function (Request $request) {
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/login');

})->name('logout');

Route::get('/home', [HomeController::class, 'home'])->middleware('auth')->name('user.home');

Route::resource('recipes', RecipeController::class);

Route::get('/', [HomeController::class, 'showLogin']);

