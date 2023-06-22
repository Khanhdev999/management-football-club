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
        <img style="height:500px;width:100%;object-fit:cover" src="{{ url("/upload/".$coach->photo) }}" class="img-fluid rounded-top" alt="">

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
          <h1><b>Name: <span style="color: brown;font-family:'Courier New', Courier, monospace">{{$coach->name}}</span></b></h1>
            <h3><b><strong>Birth Day:  </strong><span style="font-family:'Courier New', Courier, monospace">{{$coach->birthday}}</span></b></h3>
            <h3><strong>Phone number:</strong>  <span style="font-family:'Courier New', Courier, monospace">{{$coach->phone}}</span></h3>
            <h3><strong>Address:</strong>  <span style="font-family:'Courier New', Courier, monospace">{{$coach->address}}</span></h3>
        </div>
      </div><hr>
      
    <!-- END Introduction Menu -->
    </div>
    
    <!-- END GRID -->
    </div><br>
    
    <!-- END w3-content -->
    </div>
@endsection
