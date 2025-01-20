@extends('layouts.main')
@section('content')

<div>
  <form action="{{ route('post.update', $post->id) }}" method="post">
    @csrf
    @method('patch')
    <div class="px-2">
      <label for="title">Title</label>
      <input class="form-control" name="title"  id="title" type="text" placeholder="type smth..." value="{{ $post->title }}">
    </div>
    <div class="px-2">
      <label for="content">Content</label>
      <textarea class="form-control" name="content"  id="content" placeholder="type smth...">{{ $post->content }}</textarea>
    </div>
    <div class="px-2">
      <label for="image">Image</label>
      <input class="form-control" name="image"  id="image" type="text" placeholder="type smth..." value="{{ $post->image }}">
    </div>
    <div class="px-2">
      <label for="btn"></label>
      <button type="submit"name=""   id="btn" class="btn btn-primary">Update</button>
    </div>
  </form>
@endsection


