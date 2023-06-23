@extends('layout.layout')
@section('title', 'Coach List')
@section('content')
@if(Session::has('mes'))
<div class="alert alert-success" role="alert">
    {{Session::get('mes')}}
</div>
@endif
@if(Session::has('delete'))
<div class="alert alert-success" role="alert">
    {{Session::get('delete')}}
</div>
@endif
<h1 style="text-align:center;color:white;">Coaches List</h1>
<a href="{{url("/coachs/create")}}" style="margin-left:10%;color:black " class="btn btn-info btn-lg">
  <span class="glyphicon glyphicon-plus"></span> ADD NEW
</a>
<div class="container">
  <div class="table-responsive" style="display: flex;text-align:center;align-item:center">
    <br/>
    <table class="table table-success table-striped">
      <thead>
        <tr>
            <th style="text-decoration:underline">Name</th>
            <th style="text-decoration:underline">Action</th>
        </tr>
        </thead>
        <tbody>
              @foreach ($coachs as $coach)
              <tr class="table-primary" >
                <td>{{$coach->name}}</td>
                <td>
  
                  <a href="{{url("/coachs/".$coach->id)}}" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span></a>
                  <i class='fas fa-apple-alt' style='font-size:24px'></i>
                  <a href="{{url("/coachs/".$coach->id."/edit")}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span></a>
                  <form action="{{url("/coachs/".$coach->id)}}" method="post" class="d-inline">
                    {{ method_field('DELETE') }}
                    @csrf
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');"><span class="glyphicon glyphicon-trash"></span></button>
                  </form>
                </td>
              </tr>
              @endforeach
        </tbody>
    </table>
  </div>
</div>
@endsection

