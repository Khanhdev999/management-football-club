@extends('layout.layout')
@section('title', 'Coach List')
@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{$coach->name}}</h4>
            <h6 class="card-subtitle mb-2 text-muted">{{$coach->birthday}}</h6>
            <h6 class="card-subtitle mb-2 text-muted">{{$coach->phone}}</h6>
            <h6 class="card-subtitle mb-2 text-muted">{{$coach->address}}</h6>
        </div>
    </div>
@endsection