@extends('layout.layout')
@section('title','Edit Tournament')
@section('content')
<form action="/teams/{{$team->id}}" method="post" >
  {{ method_field('PUT') }}

    @csrf
    <div class="form-group">
      <label for="inputAddress2">Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{$team->name}}">
    </div>

    <button type="submit" class="btn btn-primary">Edit</button>
  </form>
@endsection
