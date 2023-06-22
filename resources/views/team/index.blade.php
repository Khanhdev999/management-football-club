@extends('layout.layout')
@section('title', 'Player List')
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
<h1 style="text-align:center;">Team List
</h1>
<a href="{{url("/teams/create")}}" class="btn btn-secondary" style="margin-left:10%;">Add new</a>
<div class="table-responsive" style="display: flex;text-align:center;align-item:center" >
  <br/>
  <table class="table table-striped table-hover">
      <thead class="table-light">
          <tr>
              <th>Name</th>
              <th>Action</th>
          </tr>
          </thead>
          <tbody class="table-group-divider">
                @foreach ($teams as $team)
                <tr class="table-primary" >
                  <td>{{$team->name}}</td>
                  <td>
                    <a href="{{url("/teams/".$team->id)}}" class="btn btn-primary">View</a>
                    <a href="{{url("/teams/".$team->id."/edit")}}" class="btn btn-warning">Edit</a>
                    <form action="{{url("/teams/".$team->id)}}" method="post" class="d-inline">
                      {{ method_field('DELETE') }}
                      @csrf
                      <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach
          </tbody>
          <tfoot>
              
          </tfoot>
  </table>
</div>
@endsection
