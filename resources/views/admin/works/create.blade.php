@extends('layouts.admin')

@section('content')
    <div class="container p-5">
        <h1 class="text-secondary mb-4">Crea un nuovo lavoro</h1>

        @if($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form
        action="{{route('admin.works.store')}}"
        method="POST"
        class="p-5 rounded bg-secondary-subtle"
    >
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Titolo (*)</label>
            <input
                type="text"
                class="form-control @error('title') is-invalid @enderror"
                id="title"
                placeholder="Titolo"
                name="title"
                value="{{old('title')}}"
            >
            @error('title')
                <p class="text-danger py-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Immagine</label>
            <input
                type="text"
                class="form-control"
                id="image"
                placeholder="Link immagine"
                name="thumb"
                value="{{old('image')}}">
        </div>

        <div class="mb-3">
            <label for="text" class="form-label">Testo (*)</label>
            <textarea
                class="form-control"
                id="text"
                rows="10"
                placeholder="Testo"
                name="text"
            >
                {{old('text')}}
            </textarea>
            @error('text')
                <p class="text-danger py-1">{{$message}}</p>
            @enderror
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Crea</button>
        </div>

    </form>
    <script>
        ClassicEditor
            .create( document.querySelector( '#text' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

    </div>
@endsection
