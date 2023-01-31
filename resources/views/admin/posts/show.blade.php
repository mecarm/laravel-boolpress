@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>{{$singolo_post->title}}</h1>
        <div class="w-50 m-auto">
            <img class="img-fluid" src="{{ asset("storage/$singolo_post->cover") }}" alt="">
        </div>
        <p>{{$singolo_post->body}}</p>
    </div>
@endsection