@extends('FoodRoutine.layout')

@section('content')
<div class='card' style="margin: 20px;">
    <div class='card-header'>Create Today's Meal</div>

    <div class='card-body'>
        <form action="{{ url('foodroutine') }}" method='post' enctype="multipart/form-data">
            {!! csrf_field() !!}
            <label>Meal date</label></br>
            <input type="date" name="date" id='date' class='form-control'></br>
            <label>Meal type</label></br>
            {{-- <input type="text" name="type" id='type' class='form-control'></br> --}}
            <select name="type" id="type">
                <option value="BreakFast"> BreakFast </option>
                <option value="Brunch"> Brunch </option>
                <option value="Lunch"> Lunch </option>
                <option value="Snack"> Snack </option>
                <option value="Dinner"> Dinner </option>
            </select></br>
            <label>Meal name</label></br>
            <input type="text" name="name" id='name' class='form-control'></br>
            <label>Meal Description</label></br>
            <input type="text" name="desc" id='desc' class='form-control'></br>
            <input type="file" class="form-control" name='photo' id='photo'></br>

            <input type="submit" value='Save' class='btn btn-success'></br>
        </form>
    </div>
</div>
@stop
