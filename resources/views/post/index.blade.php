@extends('layouts.main')
@section('content')
  <table class="table table-striped-columns">
    @foreach ($posts as $post)
    <div class="m-2">
      <ul class="list-group">
        <a href="{{ route('post.show', $post->id) }}"> {{ $post->id }}. {{ $post->title }} </a>
      </ul>
    </div>
    @endforeach
  </table>
    <div class="m-2">
      <button type="button" class="btn btn-outline-info" > <a href="{{ route('post.create') }}">Create</a> </button>
    </div>
  </div>
@endsection
