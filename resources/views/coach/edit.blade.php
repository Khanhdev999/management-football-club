@extends('layout.layout')
@section('title','Edit Coach')
@section('content')
<form action="/coachs/{{$coach->id}}" method="post" enctype="multipart/form-data">
  {{ method_field('PUT') }}
    @csrf
    <div class="form-group">
      <label for="inputAddress2">Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{$coach->name}}" >
    </div>
  <div class="form-group">
    <label for="inputAddress">Birth Day</label>
    <input type="text" class="form-control" id="birthday" name="birthday" placeholder="Birth Day" value="{{$coach->birthday}}">
  </div>
    <div class="form-group">
        <label for="inputAddress2">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone number" value="{{$coach->phone}}">
      </div>
      <div class="form-group">
        <label for="inputAddress">Coach Photo</label>
        <input type="file" class="form-control" id="photo" name="photo" value="{{$coach->photo}}">
      </div>
    <div class="form-group">
      <label for="inputAddress">Address</label>
      <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" value="{{$coach->address}}">
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
  </form>
@endsection
