@extends('layouts.main')
@section('content')

<div>
  <form action="{{ route('person.store') }}" method="POST">
    @csrf
    <div class="m-2">
      <label for="name">Name</label>
      <input class="form-control" name="name"  id="name" type="text" placeholder="type smth...">
    </div>
    <div class="m-2">
      <label for="surname">Surname</label>
      <input class="form-control" name="surname"  id="surname" type="text" placeholder="type smth...">
    </div>
    <div class="m-2">
      <label for="nationality">Nationality</label>
      <input class="form-control" name="nationality"  id="nationality" type="text" placeholder="type smth...">
    </div>
    <div class="m-2">
      <label for="telephone_number">telephone_number</label>
      <input class="form-control" name="telephone_number"  id="telephone_number" type="text" placeholder="type smth...">
    </div>
    <div class="m-2">
      <label for="is_married">Is Married</label>
      <input class="form-control" name="is_married"  id="is_married" type="text" placeholder="type smth...">
    </div>
    <div class="m-2">
      <label for="sex">Sex</label>
      <input class="form-control" name="sex"  id="sex" type="text" placeholder="type smth...">
    </div>
    
    <div class="px-2">
      <label for="btn"></label>
      <button type="submit"name=""   id="btn" class="btn btn-primary">Create</button>
    </div>
  </form>
@endsection


