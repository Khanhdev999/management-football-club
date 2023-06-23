@extends('layout.layout')
@section('title', 'TOURNAMENT Detail')
@section('content')
<header class="w3-container w3-center w3-padding-32"> 
    <h1><b>TOURNAMENT LIST</b></h1>
    <p>NAME: <strong style="font-size: 30px;color:red">{{$tournament->name}}</strong></p>
    <p>DAY MATCH: <strong style="font-size: 30px;color:red">{{$tournament->daymatch}}</strong></p>
    <p>PRIZE: <strong style="font-size: 30px;color:red">{{$tournament->prize}}</strong></p>
  </header>
@endsection
<style>
    .details{
        display: flex;
        text-align: center;
        justify-content: center;
    }
</style>
