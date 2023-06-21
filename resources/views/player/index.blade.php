@extends('layout.layout')
@section('title', 'Player List')
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
  <h1 style="text-align:center;">Player List
  </h1>
  <a href="{{url("/players/create")}}" class="btn btn-primary">Add new</a>
  <br/>
  <table class="table table-striped table-hover">
      <thead class="table-light">
          <tr>
              <th>Name</th>
              <th>Action</th>
          </tr>
          </thead>
          <tbody class="table-group-divider">
                @foreach ($players as $player)
                <tr class="table-primary" >
                  <td>{{$player->name}}</td>
                  <td>
                    <a href="{{url("/players/".$player->id)}}" class="btn btn-primary">View</a>
                    <a href="{{url("/players/".$player->id."/edit")}}" class="btn btn-warning">Edit</a>
                    <form action="{{url("/players/".$player->id)}}" method="post" class="d-inline">
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