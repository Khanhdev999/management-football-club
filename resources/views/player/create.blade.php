@extends('layout.layout')
@section('title','New Player')
@section('content')
<form action="/players" method="post" enctype="multipart/form-data">
    @csrf
    <div style="">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
      </div>
      <div class="form-group col-md-6">
        <label for="category" class="form-label">Coach List</label>
        <select id="category" name="coach_id" id="coach_id" class="form-select" aria-label="Select Category">
            <option selected>Please choose one</option>
            @foreach($coachs as $coach)
            <option value="{{$coach->id}}">{{$coach->name}}</option>
            @endforeach
        </select>
      </div>
      <div class="form-group col-md-6">
        <label for="category" class="form-label">Team List</label>
        <select id="category" name="team_id" id="team_id" class="form-select" aria-label="Select Category">
            <option selected>Please choose one</option>
            @foreach($teams as $team)
            <option value="{{$team->id}}">{{$team->name}}</option>
            @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="tournaments">Tags</label>
        <select name="tournaments[]" id="tournaments" class="form-control" multiple>
            @foreach($tournaments as $tournament)
            <option value="{{$tournament->id}}">{{$tournament->name}}</option>
            @endforeach
        </select>
    </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Birth Day</label>
        <input type="text" class="form-control" id="birthday"name="birthday" placeholder="Birth Day">
      </div>
      <div class="form-group col-md-6">
        <label for="inputAddress2">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone number">
      </div>
      <div class="form-group col-md-6">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St">
      </div>
      <div class="form-group col-md-6">
        <label for="inputAddress">Coach Photo</label>
        <input type="file" class="form-control" id="photo" name="photo">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
  </form>
@endsection