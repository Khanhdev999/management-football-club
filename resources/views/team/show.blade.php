@extends('layout.layout')
@section('title', 'Team Detail')
@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="container-fluid">
            <form name="frmsanphamchitiet" id="frmsanphamchitiet" method="post" action="">
                <div class="row">
                    <div class="col-md-6">
                        <div class="details">
                            <h1 class="product-title">Name: {{ $team->name }}</h1>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
<style>
    .details{
        display: flex;
        text-align: center;
        justify-content: center;
    }
</style>
