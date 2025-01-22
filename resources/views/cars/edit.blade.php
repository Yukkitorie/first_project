@extends('layouts.main')
@section('content')

<form action="{{ route('cars.update', [$car->id]) }}" method="POST">
  @csrf
  @method('patch') 
  <div class="m-2">
    <label for="brand">Brand</label>
    <input class="form-control" name="brand"  id="brand" type="text" placeholder="type smth...">
  </div>
  <div class="m-2">
    <label for="model">Model of car</label>
    <input class="form-control" name="model"  id="model" type="text" placeholder="type smth...">
  </div>
  <div class="m-2">
    <label for="year">Year</label>
    <input class="form-control" name="year"  id="year" type="text" placeholder="type smth...">
  </div>
  <div class="m-2">
    <label for="color">Color</label>
    <input class="form-control" name="color"  id="color" type="text" placeholder="type smth...">
  </div>
  <div class="m-2">
    <label for="vin_number">Vin Number</label>
    <input class="form-control" name="vin_number"  id="vin_number" type="text" placeholder="type smth...">
  </div>
  <div class="px-2">
    <label for="btn"></label>
    <button type="submit"name=""   id="btn" class="btn btn-primary">Create</button>
  </div>
</form>
@endsection