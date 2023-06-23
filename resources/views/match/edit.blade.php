@extends('layout.layout')
@section('title','New Match')
@section('content')
<div style="margin-top:50px" class="w3-display-middle">

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
      <select id="tournament_id" name="tournament_id"  class="form-select" aria-label="Select Category">
        <option selected>Please choose one</option>
        @foreach($tournaments as $tournament)
        <option value="{{$tournament->id}}">{{$tournament->name}}</option>
        @endforeach
    </select>
    <div class="form-group">
    <button type="submit" class="btn btn-primary">Edit</button>
    </div>
  </form>
</div>
@endsection
