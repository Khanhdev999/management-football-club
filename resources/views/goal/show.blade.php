@extends('layout.layout')
@section('title', 'Goal Detail')
@section('content')
<header class="w3-container w3-center w3-padding-32"> 
    <h1><b>GOAL LIST</b></h1>
    <p>COUNT: <strong style="font-size: 30px;color:red">{{$goal->count}}</strong></p>
    <label for="players">PLAYER LIST</label>
    <select name="players[]" id="players" class="form-control" multiple>
        @foreach($players as $player)
        <option disabled="disabled" value="{{$player->id}}" 
            @if($goal->players->contains($player->id)) selected
             @endif>{{$player->name}}</option>
        @endforeach
    </select>
    <p>MATCH: <strong style="font-size: 30px;color:red">{{ $goal->football_match->name }}</strong></p>
</header>
  
@endsection
