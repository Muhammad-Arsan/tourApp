@extends('layouts.app')

@section('content')
<!-- <div style="background-image: url('{{ asset('images/comedy.jpg') }}')"> -->

<div class="container">
    <!-- <h3 class="h3">shopping Demo-1 </h3> -->
    <h3 class="text-secondary font-weight-bold">Air Tarvel</h3> 
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="card flight-card">
                <div class="card-image">
               <a href="{{ url('/flights') }}">
                        <img class="pic-1 img-fluid" src="{{('/images/flight1.jpg')}}" >
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Hotel Tutors Vally</h5>
                    <p class="card-text"><i class="fa fa-map-marker marker"></i> Tutor street,Frankfurt,Germany,34565</p>
                    <p class="card-text"><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i></p>
                    <div class="float-right d-flex flex-column" >
                    <h5 class=" ">$ 2,399/night</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <div class="card-image">
               <a href="{{ url('/flights') }}">
                        <img class="pic-1 img-fluid" src="{{('/images/flight3.jpg')}}" >
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Hotel Tutors Vally</h5>
                    <p class="card-text"><i class="fa fa-map-marker marker"></i> Tutor street,Frankfurt,Germany,34565</p>
                    <p class="card-text"><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i></p>
                    <div class="float-right d-flex flex-column" >
                    <h5 class=" ">$ 2,399/night</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <div class="card-image">
               <a href="{{ url('/flights') }}">
                        <img class="pic-1 img-fluid" src="{{('/images/flight3.jpg')}}" >
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Hotel Tutors Vally</h5>
                    <p class="card-text"><i class="fa fa-map-marker marker"></i> Tutor street,Frankfurt,Germany,34565</p>
                    <p class="card-text"><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i></p>
                    <div class="float-right d-flex flex-column" >
                    <h5 class=" ">$ 2,399/night</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <div class="card-image">
               <a href="{{ url('/flights') }}">
                        <img class="pic-1 img-fluid" src="{{('/images/flight1.jpg')}}" >
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Hotel Tutors Vally</h5>
                    <p class="card-text"><i class="fa fa-map-marker marker"></i> Tutor street,Frankfurt,Germany,34565</p>
                    <p class="card-text"><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i></p>
                    <div class="float-right d-flex flex-column" >
                    <h5 class=" ">$ 2,399/night</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</div>


<div class="container mt-5" >
<h3 class="text-secondary font-weight-bold">Hotels</h3>

<!-- <h3 class="h3">shopping Demo-1 </h3> -->
    <div class="row">
    <div class="col-md-3 col-sm-6">
            <div class="card">
                <div class="card-image">
               <a href="{{ url('/hotels') }}">
                        <img class="pic-1 img-fluid" src="{{('/images/hotel3.jpg')}}" >
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Hotel Tutors Vally</h5>
                    <p class="card-text"><i class="fa fa-map-marker marker"></i> Tutor street,Frankfurt,Germany,34565</p>
                    <p class="card-text"><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i></p>
                    <div class="float-right d-flex flex-column" >
                    <h5 class=" ">$ 2,399/night</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <div class="card-image">
               <a href="{{ url('/hotels') }}">
                        <img class="pic-1 img-fluid" src="{{('/images/hotel3.jpg')}}" >
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Hotel Tutors Vally</h5>
                    <p class="card-text"><i class="fa fa-map-marker marker"></i> Tutor street,Frankfurt,Germany,34565</p>
                    <p class="card-text"><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i></p>
                    <div class="float-right d-flex flex-column" >
                    <h5 class=" ">$ 2,399/night</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <div class="card-image">
               <a href="{{ url('/hotels') }}">
                        <img class="pic-1 img-fluid" src="{{('/images/hotel2.jpg')}}" >
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Hotel Tutors Vally</h5>
                    <p class="card-text"><i class="fa fa-map-marker marker"></i> Tutor street,Frankfurt,Germany,34565</p>
                    <p class="card-text"><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i></p>
                    <div class="float-right d-flex flex-column" >
                    <h5 class=" ">$ 2,399/night</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <div class="card-image">
               <a href="{{ url('/hotels') }}">
                        <img class="pic-1 img-fluid" src="{{('/images/hotel1.jpg')}}" >
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Hotel Tutors Vally</h5>
                    <p class="card-text"><i class="fa fa-map-marker marker"></i> Tutor street,Frankfurt,Germany,34565</p>
                    <p class="card-text"><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i><i class="fa fa-star star-rating"></i></p>
                    <div class="float-right d-flex flex-column" >
                    <h5 class=" ">$ 2,399/night</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</div>
<div class="container outer-div" >
    <div class=" inner-div"  >
        <div class="row">
            <div class="col-md-6 mx-right">
              <img src = "{{('/images/flight3.jpg')}}" width="80%" height="70%">   
        </div>
        <div class="col-md-6 desc">
                 <h3><a href="">From Visit calofornia</a></h3>
                 <h4><a href="">Ride with Us</a></h4>
                 <p>Lorem ipsum dolor sit amet, consectetur ad consectetur ad dolor sit amet, consectetur ad consectetur ad</p>
        </div>
        </div>
    </div>
</div>


<!-- 
<footer>
@extends('layouts.footer') 
</footer> -->

@endsection

<!-- @extends('layouts.footer') -->




