@extends('layouts.main')
@section('content')

<div>
  <form action="{{ route('post.store') }}" method="POST">
    @csrf
    <div>
      <label for="title">Title</label>
      <input class="form-control" name="title"  id="title" type="text" placeholder="type smth...">
    </div>
    <div>
      <label for="content">Content</label>
      <textarea class="form-control" name="content"  id="content" placeholder="type smth..."></textarea>
    </div>
    <div>
      <label for="image">Image</label>
      <input class="form-control" name="image"  id="image" type="text" placeholder="type smth...">
    </div>
    <div>
      <label for="btn"></label>
      <button type="submit"name=""   id="btn" class="btn btn-primary">Create</button>
    </div>
  </form>
@endsection


