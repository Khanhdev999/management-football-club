@extends('layout.layout')
@section('title', 'Match Detail')
@section('content')
<header class="w3-container w3-center w3-padding-32"> 
    <h1><b>TEAM LIST</b></h1>
    <p>NAME: <strong style="font-size: 40px;color:red">{{$team->name}}</strong></p>
  </header>
@endsection
<style>
    .details{
        display: flex;
        text-align: center;
        justify-content: center;
    }
</style>
