@extends('layout.layout')
@section('title', 'Match List')
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
<h1 style="text-align:center;">Matches List</h1>
<a href="{{url("/matchs/create")}}" style="margin-left:10%;color:black " class="btn btn-info btn-lg">
  <span class="glyphicon glyphicon-plus"></span> ADD NEW
</a>
<div class="container">
  <div class="table-responsive" style="display: flex;text-align:center;align-item:center">
    <br/>
    <table class="table table-striped table-hover">
        <thead class="table-light">
            <tr>
                <th style="text-decoration:underline">Name</th>
                <th style="text-decoration:underline">Action</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
                  @foreach ($matchs as $match)
                  <tr class="table-primary" >
                    <td>{{$match->name}}</td>
                    <td>
  
                      <a href="{{url("/matchs/".$match->id)}}" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span></a>
                      <i class='fas fa-apple-alt' style='font-size:24px'></i>
                      <a href="{{url("/matchs/".$match->id."/edit")}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span></a>
                      <form action="{{url("/matchs/".$match->id)}}" method="post" class="d-inline">
                        {{ method_field('DELETE') }}
                        @csrf
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');"><span class="glyphicon glyphicon-trash"></span></button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
            </tbody>
            <tfoot>
                
            </tfoot>
    </table>
  </div>
</div>
@endsection

