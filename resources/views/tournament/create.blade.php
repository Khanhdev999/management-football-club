@extends('layout.layout')
@section('title','New Tournament')
@section('content')
<form action="/tournaments" method="post" >
    @csrf
    <div class="form-group">
      <label for="inputAddress2">Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Name" >
    </div>
  <div class="form-group">
    <label for="inputAddress">Day Match</label>
    <input type="text" class="form-control" id="daymatch" name="daymatch" placeholder="Day Match">
  </div>
    <div class="form-group">
        <label for="inputAddress2">Prize</label>
        <input type="text" class="form-control" id="prize" name="prize" placeholder="Prize">
      </div>

    <button type="submit" class="btn btn-primary">Add</button>
  </form>
@endsection
