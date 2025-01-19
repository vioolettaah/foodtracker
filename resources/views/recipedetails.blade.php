@extends('user.layout')
@section('content')
<br>
    <a href="{{url('/user/recipe')}}"> <button style="background: rgb(93, 93, 204); color: white; border-radius: 0.3vw"> <-- Back </button></a>
    <br>
    <br>
    <img src="{{ asset($recipe->photo) }}" width='200' height="200" class="img img-responsive" />
    <br>
    <br>
    <h2>{{$recipe->recipe_tag}}</h2>
    <h1> {{$recipe->recipe_title}} </h1>
    <br>
    {{$recipe->recipe_description}}
    <br>
    <br>
    <h3>Vegan Friendly: {{$recipe->recipe_vegan_friendly}}</h3>
    <br>
    <h3>Time Required: {{$recipe->recipe_time_required}} Minutes</h3>
    <br>
    <h3>Allergents: {{$recipe->recipe_allergents}}</h3>
    <br>
    <h3>Ingredients & Instructions:</h3>
    <div style="white-space: pre-line">
        {{$recipe->recipe_ingredients}}
    </div>
    <br>
@endsection
