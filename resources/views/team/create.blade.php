@extends('layout.layout')
@section('title','New Team')
@section('content')
<form action="/teams" method="post" >
    @csrf
    <div class="form-group">
      <label for="inputAddress2">Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Name" >
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
  </form>
@endsection
