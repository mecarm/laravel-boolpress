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

        {{-- Category --}}
        <div class="my-3">
            <label for="">Categories</label>
            <select class="form-control" name="category_id">
                <option value="">Seleziona la categoria</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == old('category_id', $post->category_id) ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- TAG --}}
        <div class="my-3">
            <label for="">Tags:</label>
            @foreach ($tags as $tag)
            <label class="form-control"  for="">
                {{-- Inserisco un ternario nel caso una checkbox è gia stata checkkata in precedenza di poterla vedere nella edit --}}
                <input class="form-check-input" type="checkbox" name="tags[]" value="{{ $tag->id }}" {{ $post->tags->contains($tag) ? 'checked' : '' }}>
                {{ $tag->name}}
            </label>
            @endforeach
        </div>

        <button type="submit" class="btn btn-primary">Modifica</button>
    </form>
@endsection