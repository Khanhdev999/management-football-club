@extends('layout.layout')
@section('title','Edit Goal')
@section('content')
<form action="/goals/{{$goal->id}}" method="post">
    {{ method_field('PUT') }}
    @csrf
    <div class="form-group">
        <label for="name">Count</label>
        <input type="text" class="form-control" id="count" name="count" placeholder="Count" value="{{$goal->count}}">
      </div>
      <div class="form-group col-md-6">
        <label for="player" class="form-label">Players List</label>
        <select  id="player_id" name="player_id" id="player_id" class="form-select" aria-label="Select Category">
            <option selected >Please choose one</option>
            @foreach($players as $player)
            <option value="{{$player->id}}">{{$player->name}}</option>
            @endforeach
        </select>
      </div>
      <div class="form-group col-md-6">
        <label for="category" class="form-label">Match List</label>
        <select  id="football_match_id" name="football_match_id" id="football_match_id" class="form-select" aria-label="Select Category">
            <option selected>Please choose one</option>
            @foreach($football_matchs as $football_match)
            <option value="{{$football_match->id}}">{{$football_match->name}}</option>
            @endforeach
        </select>
      </div>

    <button type="submit" class="btn btn-primary">Edit</button>
  </form>
@endsection
