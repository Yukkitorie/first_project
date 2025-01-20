@extends('layouts.main')
@section('content')
<div>
  <div class="px-2">
    {{ $post->id }}. {{ $post->title }}
  </div>
  <div class="px-2">
    {{ $post->content }}
  </div>
  <div class="px-2">
    <a href="{{ route('post.edit', $post->id) }}">Edit</a>
  </div>
  <div class="px-2">
    <form action="{{ route('post.delete', $post->id) }}" method="POST">
      @csrf
      @method('delete')
      <input type="submit" value="Delete" class="btn btn-danger" >
    </form>

  </div>
  <div class="px-2">
    <a href="{{ route('post.index') }}">Back</a>
  </div>
</div>
@endsection
