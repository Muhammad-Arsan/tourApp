@extends('layouts.app')

@section('content')

<div class="container">
@if($flights)
        @foreach($flights as $flight)
        <div class="main-booking-div box-shadow d-flex pt-5 mt-5 mb-5 col-md-12">
            <div class="air mt-2 ml-5">
                <span class="p-1 text-white text-center "><i class="fas fa-plane-departure"></i></span>
            </div> 
            <div class="ml-5">
                <strong class="text-dark ampm">2:00 AM - 6:00 PM</strong><br>
                <p class="lhr"><span >{{$flight->departure}}</span> - <span>{{$flight->arrival}}</span></p> 
            </div>
            <div class="ml-5">
                <p class="text-secondary hour"> 18h50m </p>
                <p class="text-secondary hour"> 2 stops , KHI/LHR</p>
            </div>
            <div class="ml-5 float-left d-flex flex-column ">
                <h4>PKR 222,222</h4>
                <button class="btn btn-warning"> Book </button>
            </div>
        </div>
        @endforeach

@else
 <div class = "alert alert-danger">
   <p>Record Not Found</p>
</div>
@endif
@endsection