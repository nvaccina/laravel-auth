@extends('layouts.admin')

@section('content')
    <div class="container p-5">
        <h1 class="text-secondary mb-4">Portfolio</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Data</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($works as $work)
                    <tr>
                        <td>{{$work->id}}</td>
                        <td>{{$work->title}}</td>
                        <td>{{$work->creation_date}}</td>
                        <td>
                            <a class="btn btn-primary" href="#">
                                <i class="fa-solid fa-info p-1"></i>
                            </a>
                            <a class="btn btn-warning" href="#">
                                <i class="fa-solid fa-pen"></i>
                            </a>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
