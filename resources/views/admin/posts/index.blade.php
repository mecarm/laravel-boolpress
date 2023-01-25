@extends('layouts.app')

@section('content')
    <h1>I miei Post</h1>

    <table class="table w-75 m-auto">
        <thead>
          <tr>
            <th scope="col">#ID</th>
            <th scope="col">TITLE</th>
            <th scope="col">BODY</th>
            <th scope="col">ACTIONS</th>
          </tr>
        </thead>
        <tbody>
        
    @foreach ($posts as $post)
        <tr>
          <td>{{ $post->id}}</td>
          <td>{{ $post->title}}</td>
          <td>{{ $post->body}}</td>
          <td></td>
        </tr>
    @endforeach
        </tbody>

    </table>
    <div class="d-flex justify-content-center align-item-center mt-2">
        {{$posts->links()}}
    </div>
@endsection