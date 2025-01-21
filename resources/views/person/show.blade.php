@extends('layouts.main')
@section('content')
<div class="m-2">
    <table class=".table-striped-columns">
      <div>{{ $person->name }}</div>
      <div>{{ $person->surname }}</div>
      <div>{{ $person->nationality }}</div>
      <div>{{ $person->telephone_number }}</div>
      <div>{{ $person->sex }}</div>
    </table>
</div>
<div class="m-2">
  <a href="{{ route('person.edit', $person->id) }}">Edit</a>
</div>
<div class="m-2">
  <a href="{{ route('person.index') }}">Back</a>
</div>
<form action="{{ route('person.delete', $person->id) }}" method="POST">
  @csrf
  @method('delete')
  <input type="submit" value="Delete" class="btn btn-danger" >
</form>
@endsection