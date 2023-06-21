@extends('layout.layout')
@section('title','Edit Tournament')
@section('content')
<form action="/tournaments/{{$tournament->id}}" method="post" >
  {{ method_field('PUT') }}

    @csrf
    <div class="form-group">
      <label for="inputAddress2">Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{$tournament->name}}">
    </div>
    <div class="form-group">
        <label for="inputAddress2">Day Match</label>
        <input type="text" class="form-control" id="daymatch" name="daymatch" placeholder="Day Match" value="{{$tournament->daymatch}}">
      </div>
      <div class="form-group">
        <label for="inputAddress2">Prize</label>
        <input type="text" class="form-control" id="prize" name="prize" placeholder="Prize" value="{{$tournament->prize}}">
      </div>
    <button type="submit" class="btn btn-primary">Edit</button>
  </form>
@endsection