@extends('layouts.main')
@section('content')
<table class="table table-striped-columns">
  @foreach ($car as $car)
    <div class="m-2">
      <ul class="list-group">
        <a href="{{ route('cars.show', $car->id) }}"> {{ $car->id }}. {{ $car->brand }} </a>
      </ul>
    </div>
  @endforeach
  </table>
  <div class="m-2">
    <button type="button" class="btn btn-outline-info"><a href="{{ route('cars.create') }}">Create</a></button>
  </div>
@endsection