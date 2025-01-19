<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FoodRoutine;

class FoodRoutineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $FoodRoutine = FoodRoutine::all();
        return view ('FoodRoutine.index')->with('FoodRoutine', $FoodRoutine);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('FoodRoutine.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        $fileName = time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        $requestData["photo"] = '/storage/'.$path;
        FoodRoutine::create($requestData);
        return redirect('foodroutine')->with('flash_message', 'Food Added!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
