@extends('layout.layout')
@section('title', 'Edit Coachs')
@section('content')
<form action="/coachs/{{$coach->id}}" method="post">
    {{ method_field('PUT') }}
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{$coach->name}}">
    </div>
    <div class="mb-3">
        <label for="title" class="form-label">Birthday</label>
        <input type="text" class="form-control" id="birthday" name="birthday" placeholder="Birthday" value="{{$coach->birthday}}">
    </div>
    <div class="mb-3">
        <label for="title" class="form-label">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="phone" value="{{$coach->phone}}">
    </div>
    <div class="mb-3">
        <label for="title" class="form-label">Address</label>
        <input type="text" class="form-control" id="address" name="address" placeholder="address" value="{{$coach->address}}">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection