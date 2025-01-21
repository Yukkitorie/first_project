@extends('layouts.main')
@section('content')

<table class="table table-striped-columns">
@foreach ($people as $person)
  <div class="m-2">
    <ul class="list-group">
      <a href="{{ route('person.show', $person->id) }}"> {{ $person->id }}. {{ $person->name }} </a>
    </ul>
  </div>
@endforeach
</table>
<div class="m-2">
  <button type="button" class="btn btn-outline-info"><a href="{{ route('person.create') }}">Create</a></button>
</div>
@endsection
