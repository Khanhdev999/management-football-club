@extends('layout.layout')
@section('title', 'Team Detail')
@section('content')
  <div class="w3-display-middle">
    <h1 class="w3-jumbo w3-animate-top">MATCH LIST</h1>
    <hr class="w3-border-grey" style="margin:auto;width:40%">
    <p class="w3-large w3-center">NAME: <strong style="font-size: 40px;color:grey">{{$match->name}}</strong></p>
  </div>
@endsection