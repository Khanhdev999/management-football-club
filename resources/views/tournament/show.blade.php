@extends('layout.layout')
@section('title', 'Tournament Detail')
@section('content')
<div class="container mt-4">
    <div id="thongbao" class="alert alert-danger d-none face" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
  
    <div class="card">
        <div class="container-fluid">
            <form name="frmsanphamchitiet" id="frmsanphamchitiet" method="post" action="">
                <div class="row">
                    <div class="col-md-6">
                        <div class="details">
                            <h1 class="product-title">Name: {{ $tournament->name }}</h1>
                            <h3 class="product-title">Day Match: {{ $tournament->daymatch }}</h3>
                            <h3 class="product-title">Prize: {{ $tournament->prize }}</h3> 
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
