
@extends('layouts.app')


@section('content')

Hotels
<div class="container ">
   Hotels Details 
<form action="{{route('search-hotels')}}"  method = "GET" class="row gx-3 gy-1 align-items-center">
  <div class="col-sm-3">
    <label class="visually-hidden" for="specificSizeInputName">Where to stay..</label>
    <div class="input-group">
    <div class="input-group-text"> <i class="fas fa-map-marker-alt"></i></div>
  <input type="text" name="location" class="form-control" id="specificSizeInputName" placeholder="Where to stay..">
  </div>
  </div>
  <div class="col-sm-3">
    <label class="visually-hidden" for="specificSizeInputGroupUsername">Check In</label>
    <div class="input-group">
      <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
      <input type="text" name="checkIn" onclick="(this.type = 'date')" class="form-control" id="specificSizeInputGroupUsername" placeholder="Check In">
    </div>
  </div>
  <div class="col-sm-3">
    <label class="visually-hidden" for="specificSizeInputGroupUsername">Check out</label>
    <div class="input-group p-1">
      <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
      <input type="text" name="checkOut" onclick="(this.type='date')" class="form-control" id="specificSizeInputGroupUsername" placeholder="Check Out">
    </div>
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary px-5 mt-2">Search</button>
  </div>
</form>
</div>


<div class="container mt-5">
    <img src="{{'images/travel.jpg '}}" class="img-fluid" >
	<h1 class="text-center mt-5">Flexibility matters: Explore<br>deals with free cancellation<br>options</h1>
    <p class="text-center">It's always a good idea to ensure you can make changes to your travel plans, just in case.<br> To help you get started, we've gathered a great selection of hotels to shop below—all<br> offering free cancellation up to 24 hours before your trip. We recommend 00confirming <br>your exact cancellation window on the selected hotel's details page. Searching elsewhere on our site?<br> Just look for options marked "Free Cancellation."<br> Thanks for exploring your next trip with us.</p> 
</div>
<div class="container">
    <div class="row">
   <div class="col-md-4 col-12">    
   <div class="card">
                <div> <a href="{{route('search-hotels')}}"><img src="{{asset('images/hotel1.jpg')}}" class="img-responsive image" ></a> </div>
                <p class="rating">9.6</p>
                <div class="card-body">
                    <h5 class="card-title">Hotel Tutors Vally</h5>
                    <p class="card-text"><i class="fa fa-map-marker marker"></i> Tutor street,Frankfurt,Germany,34565</p>
                    <p class="card-text"><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i></p>
                    <div class="float-right d-flex flex-column" >
                    <h5 class=" ">$ 2,399/night</h5>
                    <!-- <p class="card-text ">per night</p> -->
                    </div>
                </div>
            </div>
</div>
<div class="col-md-4 col-12">    
   
   <div class="card">
                <div> <a href="{{route('search-hotels')}}"><img src="{{asset('images/hotel2.jpg')}}" class="img-responsive image"></a> </div>
                <p class="rating">9.6</p>
                <div class="card-body">
                    <h5 class="card-title">Hotel Tutors Vally</h5>
                    <p class="card-text"><i class="fa fa-map-marker marker"></i> Tutor street,Frankfurt,Germany,34565</p>
                    <p class="card-text"><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i></p>
                    <div class="float-right d-flex flex-column" >
                    <h5 class=" ">$ 2,399/night</h5>
                    <!-- <p class="card-text ">per night</p> -->
                    </div>
                </div>
            </div>
</div>
   
<div class="col-md-4 col-12">    
   <div class="card">
                <div><a href="{{route('search-hotels')}}"> <img src="{{asset('images/hotel3.jpg')}}" class="img-responsive image"></a> </div>
                <p class="rating">9.6</p>
                <div class="card-body">
                    <h5 class="card-title">Hotel Tutors Vally</h5>
                    <p class="card-text"><i class="fa fa-map-marker marker"></i> Tutor street,Frankfurt,Germany,34565</p>
                    <p class="card-text"><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i></p>
                    <div class="float-right d-flex flex-column" >
                    <h5 class=" ">$ 2,399/night</h5>
                    <!-- <p class="card-text ">per night</p> -->
                    </div>
                </div>
            </div>
</div>
</div>
<div class="row mt-5">
   <div class="col-md-4 col-12">    
   <div class="card">
                <div><a href="{{route('search-hotels')}}"> <img src="{{asset('images/hotel4.jpg')}}" class="img-responsive image"></a> </div>
                <p class="rating">9.6</p>
                <div class="card-body">
                    <h5 class="card-title">Hotel Tutors Vally</h5>
                    <p class="card-text"><i class="fa fa-map-marker marker"></i> Tutor street,Frankfurt,Germany,34565</p>
                    <p class="card-text"><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i></p>
                    <div class="float-right d-flex flex-column" >
                    <h5 class=" ">$ 2,399/night</h5>
                    <!-- <p class="card-text ">per night</p> -->
                    </div>
                </div>
            </div>
</div>
<div class="col-md-4 col-12">    
   
   <div class="card">
                <div><a href="{{route('search-hotels')}}"> <img src="{{asset('images/hotel5.jpg')}}" class="img-responsive image"></a> </div>
                <p class="rating">9.6</p>
                <div class="card-body">
                    <h5 class="card-title">Hotel Tutors Vally</h5>
                    <p class="card-text"><i class="fa fa-map-marker marker"></i> Tutor street,Frankfurt,Germany,34565</p>
                    <p class="card-text"><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i></p>
                    <div class="float-right d-flex flex-column" >
                    <h5 class=" ">$ 2,399/night</h5>
                    <!-- <p class="card-text ">per night</p> -->
                    </div>
                </div>
            </div>
</div>
   
<div class="col-md-4 col-12">    
   <div class="card">
                <div><a href="{{route('search-hotels')}}"> <img src="{{asset('images/hotel6.jpg')}}" class="img-responsive image"></a> </div>
                <p class="rating">9.6</p>
                <div class="card-body">
                    <h5 class="card-title">Hotel Tutors Vally</h5>
                    <p class="card-text"><i class="fa fa-map-marker marker"></i> Tutor street,Frankfurt,Germany,34565</p>
                    <p class="card-text"><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i></p>
                    <div class="float-right d-flex flex-column" >
                    <h5 class=" ">$ 2,399/night</h5>
                    <!-- <p class="card-text ">per night</p> -->
                    </div>
                </div>
            </div>
</div>
<div class="row mt-5">
   <div class="col-md-4 col-12">    
   <div class="card">
                <div><a href="{{route('search-hotels')}}"> <img src="{{asset('images/hotel7.jpg')}}" class="img-responsive image"></a> </div>
                <p class="rating">9.6</p>
                <div class="card-body">
                    <h5 class="card-title">Hotel Tutors Vally</h5>
                    <p class="card-text"><i class="fa fa-map-marker marker"></i> Tutor street,Frankfurt,Germany,34565</p>
                    <p class="card-text"><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i></p>
                    <div class="float-right d-flex flex-column" >
                    <h5 class=" ">$ 2,399/night</h5>
                    <!-- <p class="card-text ">per night</p> -->
                    </div>
                </div>
            </div>
</div>
<div class="col-md-4 col-12">    
   
   <div class="card">
                <div><a href="{{route('search-hotels')}}"> <img src="{{asset('images/hotel3.jpg')}}" class="img-responsive image"></a> </div>
                <p class="rating">9.6</p>
                <div class="card-body">
                    <h5 class="card-title">Hotel Tutors Vally</h5>
                    <p class="card-text"><i class="fa fa-map-marker marker"></i> Tutor street,Frankfurt,Germany,34565</p>
                    <p class="card-text"><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i></p>
                    <div class="float-right d-flex flex-column" >
                    <h5 class=" ">$ 2,399/night</h5>
                    <!-- <p class="card-text ">per night</p> -->
                    </div>
                </div>
            </div>
</div>
  
<div class="col-md-4 col-12">    
   <div class="card">
                <div><a href="{{route('search-hotels')}}"> <img src="{{asset('images/hotel2.jpg')}}" class="img-responsive image"></a> </div>
                <p class="rating">9.6</p>
                <div class="card-body">
                    <h5 class="card-title">Hotel Tutors Vally</h5>
                    <p class="card-text"><i class="fa fa-map-marker marker"></i> Tutor street,Frankfurt,Germany,34565</p>
                    <p class="card-text"><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i></p>
                    <div class="float-right d-flex flex-column" >
                    <h5 class=" ">$ 2,399/night</h5>
                    <!-- <p class="card-text ">per night</p> -->
                    </div>
                </div>
            </div>
</div>
</div>

<h3 class="font-bold mt-3">Terms and Conditions</h3>
<p>Discount will be applied to the price of selected hotels (excluding applicable taxes and other fees).</p>
<p>Hotel prices displayed include the promotional discount and are per stay based on the cheapest double room available.</p>
<p>Blackout periods may apply and a minimum hotel stay may be required. Please check individual hotel for details.</p>
<p>Prices displayed are for stays on the specific dates shown.<br>
<p>Prices are updated regularly and are accurate when published.<br>
<p>Please click through to individual deals to confirm prices, availability and applicable terms and conditions for those deals. Expedia’s usual booking terms and conditions apply.<br>
<p>Offers are subject to limited availability and may be discontinued without notice.<br>
<p>Expedia’s usual booking terms and conditions apply.<br>
<p>Promoter: 1111 Expedia Group Way W., Seattle, WA 98119, USA. </p>
@endsection