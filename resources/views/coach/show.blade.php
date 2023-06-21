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
        <div class="container-fliud">
            <form name="frmsanphamchitiet" id="frmsanphamchitiet" method="post"
                action="/php/twig/frontend/giohang/themvaogiohang">
                <input type="hidden" name="sp_ma" id="sp_ma" value="5">
                <input type="hidden" name="sp_ten" id="sp_ten" value="Samsung Galaxy Tab 10.1 3G 16G">
                <input type="hidden" name="sp_gia" id="sp_gia" value="10990000.00">
                <input type="hidden" name="hinhdaidien" id="hinhdaidien" value="samsung-galaxy-tab-10.jpg">
  
                <div class="wrapper row">
                    <div class="preview col-md-6">
 <div class="coach-image">
    <img src="{{url("/upload/".$coach->photo)}}" class="img-fluid rounded-top" alt="">                            </div>
 </div>
                    </div>
                    <div class="details col-md-6">
                        <h1 class="product-title">Name: {{$coach->name}}</h1>
                        <h3 class="product-title">Birth Day: {{$coach->birthday}}</h3>
                        <h3 class="product-title">Phone: {{$coach->phone}}</h3>
                        <h3 class="product-title">Address: {{$coach->address}}</h3>
                    </div>

                </div>
            </form>
        </div>
    </div>
  </div>
@endsection
