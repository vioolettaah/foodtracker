@extends('recipes.layout')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-12' style="padding:20px;">
                <div class='card'>
                    <div class='card-header'>Recipe Repository</div>
                    <div class='card-body'>
                        <a href="{{ url('/recipes/create') }}" class='btn btn-success btn-sm' title=''>Add new Recipe
                        </a>
                        <br/>
                        <br/>
                        <div class='table-responsive'>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Meal Type</th>
                                        <th>Vegan Friendly</th>
                                        <th>Ingredients & How To Make</th>
                                        <th>Allergents</th>
                                        <th>Description</th>
                                        <th>Time Required</th>
                                        <th>Photo</th>
                                    </tr>
                                </thead>
                                </thead>
                                <tbody>
                                @foreach ($recipes as $item)
                                <tr>
                                    <td>
                                        <br>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        <br>
                                        {{ $item->recipe_title }}
                                        {{-- <a href="{{url('/recipedetails', $item->recipe_title)}}"> <button style="background: rgb(93, 93, 204); color: white; border-radius: 0.3vw"> See More --> </button></a> --}}
                                    </td>
                                    <td>
                                        <br>
                                        {{ $item->recipe_tag }}
                                    </td>
                                    <td>
                                        <br>
                                        {{ $item->recipe_vegan_friendly}}
                                    </td>
                                    <td>
                                        <div style="white-space: pre-line; height:200px; overflow: scroll">
                                            {{$item->recipe_ingredients}}
                                        </div>
                                    </td>
                                    <td>
                                        <br>
                                        {{ $item->recipe_allergents}}
                                    </td>
                                    <td>
                                        <br>
                                        {{ $item->recipe_description }}
                                    </td>
                                    <td>
                                        <br>
                                        {{ $item->recipe_time_required}} Minutes
                                    </td>
                                    <td>
                                        <br>
                                        <img src="{{ asset($item->photo) }}" width='200' height="200" class="img img-responsive" />
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
