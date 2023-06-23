@extends('layout.layout')
@section('title','New Match')
@section('content')
<form action="/matchs/{{$match->id}}" method="post">
    {{ method_field('PUT') }}
    @csrf
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Name of Match" value="{{$match->name}}">
      </div>
      <div class="form-group">
        <label for="name">Time</label>
        <input type="text" class="form-control" id="time" name="time" placeholder="Time of Match" value="{{$match->time}}" >
      </div>

    <button type="submit" class="btn btn-primary">Edit</button>
  </form>
@endsection