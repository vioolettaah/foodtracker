@extends('user.layout')

@section('content')
<div class="row" style="margin-top: 15vw">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <img src="{{ asset('images/tracker.jpg') }}" class="card-img-top object-cover h-48 w-full" alt="Food Tracker">
        <h5 class="card-title">Food Tracker</h5>
        <p class="card-text">Track your daily meals!! (〃￣︶￣)人(￣︶￣〃)</p>
        <a href="/user/foodroutine" class="btn btn-primary">Food Tracker</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <img src="{{ asset('images/recipe.jpg') }}" class="card-img-top object-cover h-48 w-full" alt="See Recipe">
        <h5 class="card-title">See Recipe</h5>
        <p class="card-text">Look for easy recipes here!! ( ﾉ ﾟｰﾟ)ﾉ</p>
        <a href="/user/recipe" class="btn btn-primary">See Recipe</a>
      </div>
    </div>
  </div>
</div>
@endsection