@extends('layouts.app')


@section('content')

<!-- <div class="container"> -->
 
<div class="container ">
   Search Restourent 
<form action="{{route('search-restourents')}}"  method = "GET" class="row gx-3 gy-1 align-items-center">
  <div class="col-md-4">
    <label class="visually-hidden" for="specificSizeInputName">Where ..</label>
     <div class="input-group">
        <div class="input-group-text"> <i class="fas fa-map-marker-alt"></i></div>
        <input type="text" name="location" class="form-control" id="specificSizeInputName" placeholder="Where...">
    </div>
  </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-primary px-5 mt-2">Search</button>
    </div>
</form>
</div>
  <div class="container ">
  Restourents
  <img src="{{'images/travel.jpg '}}" class="img-fluid" >
</div>

<div class="container  mt-5">
    <h2>Similer to the Restourent's you've reviewed!</h2>
    <div class="row mb-5">
     
            @foreach($restourents as $restourent)
            <div class="col-md-3 col-12">
              <a href="{{ url('/restourents/detail/'.$restourent->id) }}"><img src="{{asset('/images/hotel1.jpg')}}" class="img-fluid"></a> 
      <div>
        <h6 class="mt-1">{{$restourent->name}}</h6>
        <a href="" class="rest-rating"><i class="fa fa-star star-rating"></i>
        <i class="fa fa-star star-rating"></i>
        <i class="fa fa-star star-rating"></i>
        <i class="fa fa-star star-rating"></i>
        <i class="fa fa-star star-rating"></i></a>
        <i>(1736) Comments</i>     
        <br>
        <i class="text-secondary">{{$restourent->location}}</i>
      </div>   
   </div>
@endforeach
    </div>
<!-- <div class="col-md-3 col-12">

<a href="/restourents/detail"><img src="{{asset('/images/hotel1.jpg')}}" class="img-fluid"></a> 
    <div>
        <h6 class="mt-1">Name</h6>
        <a href="" class="rest-rating"><i class="fa fa-star star-rating"></i>
        <i class="fa fa-star star-rating"></i>
        <i class="fa fa-star star-rating"></i>
        <i class="fa fa-star star-rating"></i>
        <i class="fa fa-star star-rating"></i></a>
        <i>(1736) Comments</i>     
    <br>
    <i class="text-secondary">sabina park- kingston,Jamaica</i>
    </div>   
</div> -->
<!-- <div class="col-md-3 col-12">
<a href="/restourents/detail"><img src="{{asset('/images/hotel1.jpg')}}" class="img-fluid"></a> 
    <div>
        <h6 class="mt-1">Name</h6>
        <a href="" class="rest-rating"><i class="fa fa-star star-rating"></i>
        <i class="fa fa-star star-rating"></i>
        <i class="fa fa-star star-rating"></i>
        <i class="fa fa-star star-rating"></i>
        <i class="fa fa-star star-rating"></i></a>
        <i>(1736) Comments</i>     
    <br>
    <i class="text-secondary">sabina park- kingston,Jamaica</i>
    </div>   
</div> -->
<!-- <div class="col-md-3 col-12">
<a href="/restourents/detail"><img src="{{asset('/images/hotel1.jpg')}}" class="img-fluid"></a> 
    <div>
        <h6 class="mt-1">Name</h6>
        <a href="" class="rest-rating"><i class="fa fa-star star-rating"></i>
        <i class="fa fa-star star-rating"></i>
        <i class="fa fa-star star-rating"></i>
        <i class="fa fa-star star-rating"></i>
        <i class="fa fa-star star-rating"></i></a>
        <i>(1736) Comments</i>     
    <br>
    <i class="text-secondary">sabina park- kingston,Jamaica</i>
    </div>   
</div> -->
</div> 
<!-- 
<h2>Similer to the Restourent's you've reviewed!</h2>
<div class="row mt-3">
    <div class="col-md-3 col-12">
    <a href="/restourents/detail"><img src="{{asset('/images/hotel1.jpg')}}" class="img-fluid"></a> 
    <div>
        <h6 class="mt-1">Name</h6>
         <div class=""> 
        <a href="" class="rest-rating"><i class="fa fa-star star-rating"></i>
        <i class="fa fa-star star-rating"></i>
        <i class="fa fa-star star-rating"></i>
        <i class="fa fa-star star-rating"></i>
        <i class="fa fa-star star-rating"></i></a>
        <i>(1736) Comments</i>     
        <br>
    <i class="text-secondary">sabina park- kingston,Jamaica</i>
    </div>   
</div>
<div class="col-md-3 col-12">
<a href="/restourents/detail"><img src="{{asset('/images/hotel1.jpg')}}" class="img-fluid"></a> 
    <div>
        <h6 class="mt-1">Name</h6>
        
        <a href="" class="rest-rating"><i class="fa fa-star star-rating"></i>
        <i class="fa fa-star star-rating"></i>
        <i class="fa fa-star star-rating"></i>
        <i class="fa fa-star star-rating"></i>
        <i class="fa fa-star star-rating"></i></a>
        <i>(1736) Comments</i>     
    
    <br>
    <i class="text-secondary">sabina park- kingston,Jamaica</i>
    </div>   
</div>
<div class="col-md-3 col-12">
<a href="/restourents/detail"><img src="{{asset('/images/hotel1.jpg')}}" class="img-fluid"></a> 
    <div>
        <h6 class="mt-1">Name</h6>
    
        <a href="" class="rest-rating"><i class="fa fa-star star-rating"></i>
        <i class="fa fa-star star-rating"></i>
        <i class="fa fa-star star-rating"></i>
        <i class="fa fa-star star-rating"></i>
        <i class="fa fa-star star-rating"></i></a>
        <i>(1736) Comments</i>     
    
    <br>
    <i class="text-secondary">sabina park- kingston,Jamaica</i>
    </div>   
</div>
<div class="col-md-3 col-12">
<a href="/restourents/detail"><img src="{{asset('/images/hotel1.jpg')}}" class="img-fluid"></a> 
    <div>
        <h6 class="mt-1">Name</h6>
    
        <a href="" class="rest-rating"><i class="fa fa-star star-rating"></i>
        <i class="fa fa-star star-rating"></i>
        <i class="fa fa-star star-rating"></i>
        <i class="fa fa-star star-rating"></i>
        <i class="fa fa-star star-rating"></i></a>
        <i>(1736) Comments</i>     
        <br>
    <i class="text-secondary">sabina park- kingston,Jamaica</i>
    </div>   
</div>
</div>-->



@endsection

@extends('layouts.footer')