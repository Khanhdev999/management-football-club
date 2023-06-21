@extends('layout.layout')
@section('title','New Coach')
@section('content')
<form action="/coachs" method="post" enctype="multipart/form-data">
    @csrf
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Name" >
      </div>
    <div class="form-group">
      <label for="birthday">Birth Day</label>
      <input type="text" class="form-control" id="birthday" name="birthday" placeholder="Birth Day">
    </div>
    <div class="form-group">
        <label for="inputAddress2">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone number">
      </div>
      <div class="form-group">
        <label for="inputAddress">Coach Photo</label>
        <input type="file" class="form-control" id="photo" name="photo">
      </div>
    <div class="form-group">
      <label for="inputAddress">Address</label>
      <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St">
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
  </form>
@endsection
