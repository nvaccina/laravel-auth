@extends('layouts.admin')

@section('content')
    <div class="container p-5">
        <h2 class="text-secondary mb-4"><strong>Work: </strong>{{$work->title}}</h2>

        <div class="card-img-top d-block">
            <img src="{{$work->image}}" alt="{{$work->title}}">

        </div>


        <p class="py-2">{!!$work->text!!}</p>
        <p>{{$date_formatted}}</p>


    </div>
@endsection
