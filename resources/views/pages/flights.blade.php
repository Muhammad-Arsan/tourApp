@extends('layouts.app')

@section('content')
<div class="container">
  <h6>Flights</h6>
  <!-- <div class="buttons"> -->
  
  <button  class="btn mb-2 " id="formButton" style="cursor:none; background-color: transparent; color:skyblue; border-radius:5px; font-size:15px;text-transform: lowercase;">RoundTrip</button>
  <form action="{{ route('search-flights') }}" method="GET"> 
  <div class="row gx-3 gy-1 align-items-center">
    
    <div class="col-md-3">
        <label class="visually-hidden" for="specificSizeInputName">Departure Airport</label>
        <div class="input-group">
          <div class="input-group-text"> <i class="fas fa-map-marker-alt"></i></div>
          <input type="text" name="departure" class="form-control" id="specificSizeInputName" placeholder="Departure Airport">
        </div>
      </div>
      <div class="col-md-3">
        <label class="visually-hidden" for="specificSizeInputGroupUsername">Arrival Airport</label>
        <div class="input-group">
          <div class="input-group-text"><i class="fas fa-map-marker"></i></div>
          <input type="text" name="arrival" class="form-control" id="specificSizeInputGroupUsername" placeholder="Arrival Airport">
        </div>
      </div>
      <div class="col-md-2">
        <label class="visually-hidden" for="specificSizeInputGroupUsername">Departing</label>
        <div class="input-group">
          <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
          <input type="text" name="depart_date" onclick="(this.type='date')" class="form-control" id="specificSizeInputGroupUsername" placeholder="Departure Date">
        </div>
      </div>
      <div class="col-md-2">
        <label class="visually-hidden" for="specificSizeInputGroupUsername">Returning</label>
        <div class="input-group">
          <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
          <input type="text" name="return_date" onclick="(this.type='date')" class="form-control" id="specificSizeInputGroupUsername" placeholder="Arrival Date">
        </div>
      </div>
      <div class="col-md-2 ">
      
      <div class="number d-flex justify-content-center">
      <label>Passengers</label>  
	<span class="minus text-center">-</span>
	<input type="text" name= "passenger" placeholder = "Passenger.." value="1"/>
	<span class="plus">+</span>
</div>  
    </div>
      </div>
      <!-- <div class="row align-items-center d-flex"> -->
    <!-- <div class="col-md-3 col-12"> -->
    <!-- <div class="d-flex flex-direction-row"> -->
    
    <!-- </div>   -->
    <!-- </div> -->
      <div class="col-auto">
        <!-- <a href="/bookflight"> -->
        <button type="submit" class="btn btn-primary px-5 mt-2">Search</button>
      <!-- </a> -->
      </div>
    <!-- </div> -->
    </form>

    @if($errors->any())

       <div class="alert alert-danger">
      
       <ul>
         @foreach($errors->all() as $error)
           <li>{{$error}}</li>
         @endforeach
       </ul>
      </div>

    @endif
    
    <!-- <button class="btn  mb-3 mt-3" id="formButton2" style="background-color: transparent; color:skyblue; border-radius:10px; font-size:15px;text-transform: lowercase; ">One way</button> -->
    <button class="btn mb-2 mb-3 mt-3" id="formButton" style="cursor:none; background-color: transparent; color:skyblue; border-radius:5px; font-size:15px;text-transform: lowercase;">One way</button>
    
    <form action="{{route('search-flights')}}" method="GET">
      <div class = "row gx-3 gy-1 align-items-center mb-3">
      <div class="col-sm-4">
        <label class="visually-hidden" for="specificSizeInputName">Departure Airport</label>
        <div class="input-group">
          <div class="input-group-text"> <i class="fas fa-map-marker-alt"></i></div>
          <input type="text" name="departure" class="form-control" id="specificSizeInputName" placeholder="Departure Airport">
        </div>
      </div>
      <div class="col-sm-4">
        <label class="visually-hidden" for="specificSizeInputGroupUsername">Arrival Airport</label>
        <div class="input-group">
          <div class="input-group-text"><i class="fas fa-map-marker"></i></div>
          <input type="text" name="arrival" class="form-control" id="specificSizeInputGroupUsername" placeholder="Arrival Airport">
        </div>
      </div>
      <div class="col-sm-4">
        <label class="visually-hidden" for="specificSizeInputGroupUsername">Departing</label>
        <div class="input-group">
          <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
          <input type="text" name="depart_date" onclick="(this.type='date')" class="form-control" id="specificSizeInputGroupUsername" placeholder="Going to">
        </div>
      </div>
      <!-- <div class="col-sm-3">
    <label class="visually-hidden" for="specificSizeInputGroupUsername">Returning</label>
    <div class="input-group">
      <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
      <input type="Date" class="form-control" id="specificSizeInputGroupUsername" placeholder="Going to">
    </div>-->
  </div> 
      <div class="col-auto mb-5">
        <button type="submit" class="btn btn-primary px-5 mt-2">Search</button>
      </div>
    </form>
    <!-- @if($errors->any())

<div class="alert alert-danger">

<ul>
  @foreach($errors->all() as $error)
    <li>{{$error}}</li>
  @endforeach
</ul>
</div>

@endif -->

    <!-- <button class="btn  mb-5 " style="background-color: transparent; color:skyblue; border-radius:10px; font-size:15px;text-transform: lowercase; "><a href="#form3" data-toggle="tab" aria-selected="false">Multi city</a></button> -->
    <div class="container">
      <div class="row">
        <div class="col-md-10 ">
          <figure class="figure pb-5" style="border: 1px solid #e3dfde;">
            <img src="{{asset('images/travel.jpg')}}" class="figure-img img-fluid rounded" alt="...">
            <figcaption class="figure-caption text-start ml-5"><strong>Spend less Adventure more.</strong></figcaption>
            <figcaption class="figure-caption text-start ml-5">A caption for the above image.A caption for the above image</figcaption>

          </figure>
        </div>
        <!-- <div class="col-md-4" style="border: 1px solid #e3dfde;">
         <div class="container">
    <div class="row">
     -->
        <!-- <div class="row row-margin-bottom"> -->
        <!-- <div class="col-md-5 no-padding lib-item" data-category="view"> -->
        <!-- <div class="lib-panel">
                <div class="row ">
                    <div class="col-md-5"> <img src="{{asset('images/travel.jpg')}}" class="figure-img img-fluid rounded " height="100px" width="100%"></div>
                    <div class="col-md-7">
                        <div class="lib-row lib-header"> Nature sun shine <div class="lib-header-seperator"></div>
                        </div>
                        <div class="lib-row lib-desc"> Nature, in the broadest sense, is the natural, physical, or material world or universe. "Nature" can refer to the phenomena of the physical world, and also to life in general. </div>
                    </div>
                </div> -->
        <!-- </div> -->
        <!-- </div>
    </div>
</div>
</div> -->
      </div>
    </div>
    <!-- </div>
    <img src="{{asset('images/travel.jpg')}}" width="100%" height="600px">
</div> -->

    <div class="container">
      <h3>Airlines reviews</h3>
      <div class="row">
        <div class="col-md-4">
          <div id="card">
            <img src="{{asset('images/flight1.jpg')}}" alt="cover">

            <div id="title" class="text">American Airlines</div>
            <div id="artist" class="text">30000 Revies</div>
            <!-- <div id="album" class="text">Interstellar</div> -->

            <div id="rating">
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <!-- <i class="material-icons">expand_less</i> -->
            </div>
            <!-- <img src="http://www.hans-zimmer.com/~hybrid/zimmer/Interstellar.jpg" alt="cover"> -->
          </div>

        </div>
        <div class="col-md-4">
          <div id="card">
            <img src="{{asset('images/flight1.jpg')}}" alt="cover">

            <div id="title" class="text">American Airlines</div>
            <div id="artist" class="text">30000 Revies</div>
            <!-- <div id="album" class="text">Interstellar</div> -->

            <div id="rating">
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <!-- <i class="material-icons">expand_less</i> -->
            </div>
            <!-- <img src="http://www.hans-zimmer.com/~hybrid/zimmer/Interstellar.jpg" alt="cover"> -->
          </div>

        </div>
        <div class="col-md-4">
          <div id="card">
            <img src="{{asset('images/flight1.jpg')}}" alt="cover">

            <div id="title" class="text">American Airlines</div>
            <div id="artist" class="text">30000 Revies</div>
            <!-- <div id="album" class="text">Interstellar</div> -->

            <div id="rating">
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <!-- <i class="material-icons">expand_less</i> -->
            </div>
            <!-- <img src="http://www.hans-zimmer.com/~hybrid/zimmer/Interstellar.jpg" alt="cover"> -->
          </div>

        </div>
      </div>
    </div>
<script src="{{ asset('js/custom.js') }}"> </script>
    @endsection

    @extends('layouts.footer')