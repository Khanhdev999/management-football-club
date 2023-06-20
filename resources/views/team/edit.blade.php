@extends('layout.layout')
@section('title', 'Edit Team')
@section('content')
<form action="/teams/{{$team->id}}" method="post">
    {{ method_field('PUT') }}
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{$team->name}}">
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection