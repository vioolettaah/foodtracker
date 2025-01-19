@extends('recipes.layout')

@section('content')
<div class='card' style="margin: 20px;">
    <div class='card-header'>Create New Recipe</div>

    <div class='card-body'>
        <form action="{{ route('recipes.index') }}" method='post' enctype="multipart/form-data">
            {!! csrf_field() !!}
            <label>Title</label></br>
            <input type="text" name="recipe_title" id='recipe_title' class='form-control'></br>
            <label>Meal type</label></br>
            {{-- <input type="text" name="type" id='type' class='form-control'></br> --}}
            <select name="recipe_tag" id="recipe_tag">
                <option value="BreakFast"> BreakFast </option>
                <option value="Brunch"> Brunch </option>
                <option value="Lunch"> Lunch </option>
                <option value="Snack"> Snack </option>
                <option value="Dinner"> Dinner </option>
            </select></br>
            <br>
            <label>Vegan Friendly</label></br>
            {{-- <input type="text" name="type" id='type' class='form-control'></br> --}}
            <select name="recipe_vegan_friendly" id="recipe_vegan_friendly">
                <option value="Yes"> Yes </option>
                <option value="No"> No </option>
            </select></br>
            <br>
            <label>Ingredients & Instructions</label></br>
            {{-- <input type="text" name="recipe_ingredients" id='recipe_ingredients' class='form-control'></br> --}}
            <textarea name="recipe_ingredients" id='recipe_ingredients' class='form-control' rows="5"></textarea></br>
            <label>Allergents</label></br>
            <textarea name="recipe_allergents" id='recipe_allergents' class='form-control' rows="5"></textarea></br>
            <label>Description</label></br>
            <input type="text" name="recipe_description" id='recipe_description' class='form-control'></br>
            <label>Time Required (In Minutes)</label></br>
            <input type="number" name="recipe_time_required" id='recipe_time_required' class='form-control'></br>
            <input type="file" class="form-control" name='photo' id='photo'></br>

            <input type="submit" value='Save' class='btn btn-success'></br>
        </form>
    </div>
</div>
@stop


