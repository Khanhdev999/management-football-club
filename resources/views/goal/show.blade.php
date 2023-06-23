@extends('layout.layout')
@section('title', 'Goal Detail')
@section('content')

<div class="w3-display-middle">
    <h1 class="w3-jumbo w3-animate-top">PLAYER LIST</h1>
    <hr class="w3-border-grey" style="margin:auto;width:40%">
    <select name="players[]" id="players" class="form-control" multiple>
        @foreach($players as $player)
        <option disabled="disabled" value="{{$player->id}}" 
            @if($goal->players->contains($player->id)) selected
             @endif>{{$player->name}}</option>
        @endforeach
    </select>
   <p class="w3-jumbo w3-animate-top">MATCH: {{ $goal->football_match->name }}</p>
  </div>
@endsection
