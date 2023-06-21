@extends('layout.layout')
@section('title', 'New Team')
@section('content')
<form action="/teams" method="post">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name </label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection