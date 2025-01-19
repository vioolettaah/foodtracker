@extends('search.layout')

@section('content')
    <h1>Search Results for "{{ $query }}"</h1>

    @if($results->isEmpty())
        <p>No results found.</p>
    @else
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($results as $item)
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset($item->photo) }}" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title">{{ $item->recipe_title }}</h4>
                                <h5><p class="card-text">{{ $item->recipe_tag }}</p></h5>
                                <h6><p class="card-text">{{ $item->recipe_time_required }} Minutes</p></h6>
                                <p class="card-text">{{ $item->recipe_description }}</p>
                                <p class="card-text"><i>Allergents: {{ $item->recipe_allergents}}</i></p>
                                <a href="{{url('/recipedetails', $item->recipe_title)}}"> <button style="background: rgb(93, 93, 204); color: white; border-radius: 0.3vw"> See More --> </button></a>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    @endif
@endsection
