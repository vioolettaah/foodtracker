@extends('FoodRoutine.layout')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-12' style="padding:20px;">
                <div class='card'>
                    <div class='card-header'>Image upload</div>
			 <div class='card-body'>
                        <a href="{{ url('/user/foodroutine/create') }}" class='btn btn-success btn-sm' title='' style="background: rgb(93, 93, 204)">Add Today's Meal
                        </a>
			     <br/>
                        <br/>
                        <div class='table-responsive'>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Meal Type</th>
                                        <th>Meal Name</th>
                                        <th>Description</th>
                                        <th>Photo</th>
                                    </tr>
                                </thead>
                                </thead>

                                <tbody>
                                @foreach ($FoodRoutine as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->date }}</td>
                                        <td>{{ $item->type }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->desc }}</td>
                                        <td>
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
@endsection
