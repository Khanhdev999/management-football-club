@extends('layout.layout')
@section('title', 'New Coachs')
@section('content')
<form action="/coachs" method="post">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name </label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
    </div>
    <div class="mb-3">
        <label for="birthday" class="form-label">Birthday </label>
        <input type="text" class="form-control" id="birthday" name="birthday" placeholder="Birthday">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone </label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
    </div>
    <div class="mb-3">
        <label for="address" class="form-label">Address </label>
        <input type="text" class="form-control" id="address" name="address" placeholder="Address">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection