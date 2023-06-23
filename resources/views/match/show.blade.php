@extends('layout.layout')
@section('title', 'Team Detail')
@section('content')
<header class="w3-container w3-center w3-padding-32"> 
    <h1><b>MATHC LIST</b></h1>
    <p>NAME: <strong style="font-size: 40px;color:red">{{$match->name}}</strong></p>
  </header>
@endsection