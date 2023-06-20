@extends('layout.layout')
@section('title', 'Team')
@section('content')
<div class="table-responsive">
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
                  <td>
                    <a href="{{url("/teams/".$team->id)}}">
                    {{$team->name}}
                    </a>
                  </td>
                  
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