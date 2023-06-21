@extends('layout.layout')
@section('title','Edit player')
@section('content')
<form action="/players/{{$player->id}}" method="post">
  {{ method_field('PUT') }}
    @csrf
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{$player->name}}" >
    </div>
  <div class="form-group">
    <label for="birthday">Birth Day</label>
    <input type="text" class="form-control" id="birthday" name="birthday" placeholder="Birth Day" value="{{$player->birthday}}">
  </div>
    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone number" value="{{$player->phone}}">
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
            @foreach($tournament as $tournament)
            <option value="{{$tournament->id}}">{{$tournament->name}}</option>
            @endforeach
        </select>
    </div>
      {{-- <div class="form-group">
        <label for="photo">Player Photo</label>
        <input type="file" class="form-control-file" id="photo" name="photo">
        @if ($player->photo)
            <img src="{{ asset('storage/' . $player->photo) }}" alt="Player Photo" width="100">
        @endif
    </div> --}}
    <div class="form-group">
      <label for="address">Address</label>
      <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" value="{{$player->address}}">
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
  </form>
@endsection