@extends('layout.layout')
@section('title', 'Team List')
@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{$team->name}}</h4>
        </div>
    </div>
@endsection