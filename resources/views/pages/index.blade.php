@extends('welcome')

@section('content')
<!--
<nav class="navbar navbar-sm navbar-light">
  
    <ul class="navbar-nav mr">
      <li class="nav-item active">
        <a class="nav-link" href="/">Places to Stay<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about">Monthly Stay</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about">Signup</a>
      </li>
      </ul>
    </div>
  </nav>
-->
   
<div class="jumbotron" style="background-color: whitesmoke;">

    <form class="form-inline pt-5"> <!--my-2 my-lg-0 -->
            <div class="form-group col-sm-3 pt-1">
                <label for="searchcity">Places to Stay :</label>
                 <input id="searchcity" class="form-control mr-sm-4" type="search" placeholder="City Name">
            </div>
            <div class="form-group col-sm-3">
                <label for="datepicker1" >Check In </label>
                <input id="datepicker1" type="text" class="form-control datepicker">
            </div>

            <div class="form-group col-sm-2">
                <label for="datepicker2">Check out </label>
                <input id="datepicker2" type="text" class="form-control datepicker">
            </div>
    
            <div class="form-group col-sm-2 pt-3 pl-2">
                <div class="input-group">
                    <div class="input-group-text">Guests</div>
                   <!-- <label for="inputguest">Guests </label> -->
                    <select id="inputguest" class="form-control">
                    <option selected>Adults</option>
                    <option>Children</option>
                    <option>Infants</option>
                    </select>
                </div>
            </div>
            <div class="form-group col-sm-2 pt-3">
                <button type="button" class="btn btn-success">Search</button>
            </div>
    </form>

    
    
       
      
    

     <h2 class="pt-3">Interesting Places</h2>
     <div class="studiogallery">
        <div class="row justify-content-center">
    
           <div class="col-md-8">
               <div class="row pb-2">
                   <a href="{{ asset('images/1/Image_1.jpg') }}" data-toggle="lightbox" data-gallery="studio-gallery" class="col-sm-4">
                   <img src="{{ asset('images/1/Image_1_thumb.jpg') }}" class="img-fluid"></a>
                   <a href="{{ asset('images/7/Image_1.jpg') }}" data-toggle="lightbox" data-gallery="studio-gallery" class="col-sm-4">
                   <img src="{{ asset('images/7/Image_1_thumb.jpg') }}" class="img-fluid"></a>
                   <a href="{{ asset('images/3/Image_1.jpg') }}" data-toggle="lightbox" data-gallery="studio-gallery" class="col-sm-4">
                    <img src="{{ asset('images/3/Image_1_thumb.jpg') }}" class="img-fluid"></a>
               </div>
               <div class="row mb-2">
                <a href="{{ asset('images/12/Image_1.jpg') }}" data-toggle="lightbox" data-gallery="studio-gallery" class="col-sm-4">
                    <img src="{{ asset('images/12/Image_1_thumb.jpg') }}" class="img-fluid"></a>
                    <a href="{{ asset('images/9/Image_1.jpg') }}" data-toggle="lightbox" data-gallery="studio-gallery" class="col-sm-4">
                    <img src="{{ asset('images/9/Image_1_thumb.jpg') }}" class="img-fluid"></a>
                    <a href="{{ asset('images/6/Image_1.jpg') }}" data-toggle="lightbox" data-gallery="studio-gallery" class="col-sm-4">
                     <img src="{{ asset('images/6/Image_1_thumb.jpg') }}" class="img-fluid"></a>
               </div>
           </div>
       </div>
    
</div>
@endsection