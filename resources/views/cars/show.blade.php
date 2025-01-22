@extends('layouts.main')
@section('content')

<div class="m-2">
  <table class=".table-striped-columns">
    <div>{{ $car->brand }}</div>
    <div>{{ $car->model }}</div>
    <div>{{ $car->year }}</div>
    <div>{{ $car->color }}</div>
    <div>{{ $car->vin_number }}</div>
  </table>
  <div class="m-2">
    <a href="{{ route('cars.edit', $car->id) }}">Edit</a>
  </div>
  </div>
    <div class="m-2">
      <a href="{{ route('cars.index') }}">Back</a>
    </div>
<form action="{{ route('cars.delete', $car->id) }}" method="POST">
  @csrf
  @method('delete')
  <input type="submit" value="Delete" class="btn btn-danger">
</form>
@endsection