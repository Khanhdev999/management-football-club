@extends('layout.layout')
@section('title', 'TOURNAMENT Detail')
@section('content')
  <div class="w3-display-middle">
    <h1 class="w3-jumbo w3-animate-top">TOURNAMENT LIST</h1>
    <hr class="w3-border-grey" style="margin:auto;width:40%">
    <p class="w3-large w3-center">NAME: <strong style="font-size: 40px;color:grey">{{$tournament->name}}</strong></p>
    <hr class="w3-border-grey" style="margin:auto;width:40%">
    <p class="w3-large w3-center">DAY MATCH: <strong style="font-size: 40px;color:grey">{{$tournament->daymatch}}</strong></p>
    <hr class="w3-border-grey" style="margin:auto;width:40%">
    <p class="w3-large w3-center">PRIZE: <strong style="font-size: 40px;color:grey">{{$tournament->prize}}</strong></p>
  </div>
@endsection
