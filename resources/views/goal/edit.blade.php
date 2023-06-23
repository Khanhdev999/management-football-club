@extends('layout.layout')
@section('title','Edit Goal')
@section('content')
<div style="margin-top:50px" class="w3-display-middle">

<form action="/goals/{{$goal->id}}" method="post" enctype="multipart/form-data">
  {{ method_field('PUT') }}
    @csrf
      <div class="form-group">
        <label for="name">Count</label>
        <input type="text" class="form-control" id="count" name="count" placeholder="Count" >
      </div>
      <div class="form-group col-md-6">
        <label for="player" class="form-label">Players List</label>
        <select name="players[]" id="players" class="form-control" multiple>
          @foreach($players as $player)
          <option value="{{$player->id}}" @if($goal->players->contains($goal->id)) selected @endif>{{$player->name}}</option>
          @endforeach
      </select>
      </div>
      <div class="form-group col-md-6">
        <label for="category" class="form-label">Match List</label>
        <select id="football_match_id" name="football_match_id" id="football_match_id" class="form-select" aria-label="Select Category">
            <option selected>Please choose one</option>
            @foreach($football_matchs as $football_match)
            <option value="{{$football_match->id}}">{{$football_match->name}}</option>
            @endforeach
        </select>
      </div>
    <button type="submit" class="btn btn-primary">Edit</button>
  </form>
</div>
@endsection
