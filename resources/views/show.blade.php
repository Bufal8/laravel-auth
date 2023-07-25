@extends('layouts.app')
@section('content')

    <div class="container text-center">
        <h1>{{ $project -> name }}</h1>
        <img src="http://picsum.photos/350/350" alt="">
        <div class="row align-items-center py-4">
            <span class="col">
                {{$project -> description}}
            </span>
            <span class="col">
                <strong>{{$project -> difficulty}}</strong>
            </span>
            <span class="col">
               Start date: {{$project -> start_date}} <br>
               End date: {{$project -> end_date}}
            </span>
        </div>
    </div>

@endsection
