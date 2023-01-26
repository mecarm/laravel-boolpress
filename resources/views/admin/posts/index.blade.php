@extends('layouts.app')

@section('font-awesome')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
    <h1 class="text-center">Pagina Post</h1>
    <h2 class="text-center">
        <a href="{{ route('admin.posts.create')}}">Crea nuovo post</a>
        
    </h2>

    <table class="table w-75 m-auto">
        <thead>
          <tr>
            <th scope="col">#ID</th>
            <th scope="col">TITLE</th>
            <th scope="col">BODY</th>
            <th scope="col">CATEGORY</th>
            <th scope="col">ACTIONS</th>
          </tr>
        </thead>
        <tbody>
        
    @foreach ($posts as $post)
        <tr>
            <td>{{ $post->id}}</td>
            <td>
                <a href="{{route('admin.posts.show', $post->id)}}">
                    {{ $post->title}}
                </a>
            
            </td>
            <td>{{ $post->body}}</td>
            <td>
                @if ( $post->category )
                    {{ $post->category['name']}}
                @endif
            </td>
            <td class="d-flex gap-1">
                <form method="POST" action="{{route('admin.posts.destroy', $post->id)}}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </form>
                
                <a class="btn btn-primary" href="{{ route('admin.posts.edit', $post->id)}}">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a> 
            </td>
        </tr>
    @endforeach
        </tbody>

    </table>
    <div class="d-flex justify-content-center align-item-center mt-2">
        {{$posts->links()}}
    </div>
@endsection