@extends('layout.layout')
@section('title', 'Coach Detail')
@section('content')
<div class="w3-content" style="max-width:1400px">

    <!-- Header -->    
    <!-- Grid -->
    <div class="w3-row">
    
    <!-- Blog entries -->
    <div class="w3-col l8 s12">
      <!-- Blog entry -->
      <div class="w3-card-4 w3-margin w3-white">
        <img style="height:500px;width:100%;" src="{{ url("/upload/".$coach->photo) }}" class="img-fluid rounded-top" alt="">
        <div class="w3-container">
          <h3><b>Birth Day -- {{$coach->birthday}}</b></h3>
          <h5>Phone number:  <span class="w3-opacity">{{$coach->phone}}</span></h5>
          <h5>Address:  <span class="w3-opacity">{{$coach->address}}</span></h5>
        </div>
      </div>
      <hr>
    
      <!-- Blog entry -->
    <!-- END BLOG ENTRIES -->
    </div>
    
    <!-- Introduction menu -->
    <div class="w3-col l4">
      <!-- About Card -->
      <div class="w3-card w3-margin w3-margin-top">
        <img style="width:100%;" src="{{ url("/upload/".$coach->photo) }}" class="img-fluid rounded-top" alt="">
        <div class="w3-container w3-white">
          <h4><b>He Name Is <span style="color: brown">{{$coach->name}}</span></b></h4>
          <p>Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a interest of lorem ipsum and mauris neque quam blog. I want to share my world with you.</p>
        </div>
      </div><hr>
      
    <!-- END Introduction Menu -->
    </div>
    
    <!-- END GRID -->
    </div><br>
    
    <!-- END w3-content -->
    </div>
@endsection
