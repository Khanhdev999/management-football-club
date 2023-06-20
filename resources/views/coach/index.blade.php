@extends('layout.layout')
@section('title', 'Coach')
@section('content')
<div class="table-responsive">
  <table class="table table-striped table-hover">
      <thead class="table-light">
          <tr>
              <th>Name</th>
              <th>Birthday</th>
              <th>Phone</th>
              <th>Address</th>
              <th>Action</th>
          </tr>
          </thead>
          <tbody class="table-group-divider">
                @foreach ($coachs as $coach)
                <tr class="table-primary" >
                  <td>
                    <a href="{{url("/coachs/".$coach->id)}}">
                    {{$coach->name}}
                    </a>
                  </td>
                  <td>{{$coach->birthday}}</td>
                  <td>{{$coach->phone}}</td>
                  <td>{{$coach->address}}</td>
                  <td>
                    <a href="{{url("/coachs/".$coach->id)}}" class="btn btn-primary">View</a>
                    <a href="{{url("/coachs/".$coach->id."/edit")}}" class="btn btn-warning">Edit</a>
                    <form action="{{url("/coachs/".$coach->id)}}" method="post" class="d-inline">
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