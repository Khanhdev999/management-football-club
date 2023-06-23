@extends('layout.layout')
@section('title','New Match')
@section('content')
<form action="/matchs" method="post" >
    @csrf
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Name of Match" >
      </div>
      <div class="form-group">
        <label for="name">Time</label>
        <input type="text" class="form-control" id="time" name="time" placeholder="Time of Match" >
      </div>
      <select id="tournament_id" name="tournament"  class="form-select" aria-label="Select Category">
        <option selected>Please choose one</option>
        @foreach($tournaments as $tournament)
        <option value="{{$tournament->id}}">{{$tournament->name}}</option>
        @endforeach
    </select>
  </div>
    <button type="submit" class="btn btn-primary">Add</button>
  </form>
@endsection
