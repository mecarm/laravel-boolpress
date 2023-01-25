@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Modifica post {{$post->title}}</h1>
    </div>

    <form class="w-75 m-auto" action="{{route('admin.posts.update', $post->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label class="form-label" for="">Titolo</label>
            <input value="title" class="form-control" type="text" name="title">
            @error('title')
                <div class="alert alert-danger">
                     {{$message}}
                </div>
            @enderror
        </div>

        <div>
            <label class="form-label" for="">Body</label>
            <textarea class="form-control" name="body">{{$post->body}}</textarea>
            @error('body')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
             @enderror
        </div>

        <button type="submit" class="btn btn-primary">Modifica</button>
    </form>
@endsection