@extends('layout.layout')
@section('title', 'Match Detail')
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
                            <h1 class="product-title">Count: {{ $goal->count }}</h1>
                            <div class="form-group">
                                <label for="players">Players List</label>
                                <select name="players[]" id="players" class="form-control" multiple>
                                    @foreach($players as $player)
                                    <option disabled="disabled" value="{{$player->id}}" 
                                        @if($goal->players->contains($player->id)) selected
                                         @endif>{{$player->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <h3 class="product-title">Match: {{ $goal->football_match->name }} </h3> 
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
