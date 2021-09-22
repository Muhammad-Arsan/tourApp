@extends('layouts.app')
@section('content')
  
@foreach($hotels as $hotel)
  <div class="container d-flex align-items-center justify-content-center mt-5">
    <div class="row details-card-img">
      <div class="col-md-4">
        <img src="{{asset('images/hotel1.jpg')}}" class="img-fluid" width="100%">
      </div>
      <div class="col-md-8">
        <h2>{{$hotel->name}}</h2>
        <h6>{{$hotel->location}}</h6>
        <h4>Amazing Location , Walking to Everything</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium  <br>recusandae, aperiam magnam placeat totam unde minima</p>
        <div class="float-right d-flex flex-column" >
          <h5 class=" ">{{$hotel->price}}<span>/night</span></h5>
          <small>Inc Taxes and fees</small>
        </div>
        <button class="btn btn-primary">Reserve</button>
      </div>
    </div>
  </div> 
@endforeach

@endsection