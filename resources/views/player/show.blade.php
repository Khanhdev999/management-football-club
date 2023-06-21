@extends('layout.layout')
@section('title', 'Coach Detail')
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
                        <div class="preview">
                            <img src="{{ url("/upload/".$player->photo) }}" class="img-fluid rounded-top" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="details">
                            <h1 class="product-title">Name: {{ $player->name }}</h1>
                            <h3 class="product-title">Coach: {{ $player->coach->name }}</h3>
                            <h3 class="product-title">Team: {{ $player->team->name }}</h3>
                            <h3 class="product-title">Birth Day: {{ $player->birthday }}</h3>
                            <h3 class="product-title">Phone: {{ $player->phone }}</h3>
                            <h3 class="product-title">Address: {{ $player->address }}</h3>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
