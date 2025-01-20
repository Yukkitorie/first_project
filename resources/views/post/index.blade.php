@extends('layouts.main')
@section('content')
  <div>
    <div class="px-2">
      <button type="button" class="btn btn-outline-info" > <a href="{{ route('post.create') }}">Create</a> </button>
    </div>
    @foreach ($posts as $post)
    <div class="px-2">
    <a href="{{ route('post.show', $post->id) }}"> {{ $post->id }}. {{ $post->title }} </a>
    </div>
    @endforeach
    
  </div>
@endsection
