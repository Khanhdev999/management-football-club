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
<h1 style="text-align:center;">Coaches List</h1>
<a href="{{url("/coachs/create")}}"class="btn btn-secondary" style="margin-left:10%;color:black ">Add new</a>
<div class="table-responsive" style="display: flex;text-align:center;align-item:center">
  <br/>
  <table class="table table-striped table-hover">
      <thead class="table-light">
          <tr>
              <th>Name</th>
              <th>Action</th>
          </tr>
          </thead>
          <tbody class="table-group-divider">
                @foreach ($coachs as $coach)
                <tr class="table-primary" >
                  <td>{{$coach->name}}</td>
                  <td>

                    <a href="{{url("/coachs/".$coach->id)}}" class="btn btn-primary">View</a>
                    <i class='fas fa-apple-alt' style='font-size:24px'></i>
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

