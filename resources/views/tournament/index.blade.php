@extends('layout.layout')
@section('title', 'Tournament List')
@section('content')
<div class="table-responsive">
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
  <h1 style="text-align:center;">Tournament List
  </h1>
  <a href="{{url("/tournaments/create")}}" class="btn btn-primary">Add new</a>
  <br/>
  <table class="table table-striped table-hover">
      <thead class="table-light">
          <tr>
              <th>Name</th>
              <th>Action</th>
          </tr>
          </thead>
          <tbody class="table-group-divider">
                @foreach ($tournaments as $tournament)
                <tr class="table-primary" >
                  <td>{{$tournament->name}}</td>
                  <td>
                    <a href="{{url("/tournaments/".$tournament->id)}}" class="btn btn-primary">View</a>
                    <a href="{{url("/tournaments/".$tournament->id."/edit")}}" class="btn btn-warning">Edit</a>
                    <form action="{{url("/tournaments/".$tournament->id)}}" method="post" class="d-inline">
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