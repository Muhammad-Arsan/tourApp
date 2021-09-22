  @extends('layouts.app')
  @section('content')

    <div class="container res-details">
       Restourent Details...
       <div class="">
        <h3>{{$restourent->name}}</h3>
        <div class="d-flex flex-row">
        <a href="" class="rest-rating"><i class="fa fa-star star-rating"></i>
            <i class="fa fa-star star-rating"></i>
            <i class="fa fa-star star-rating"></i>
            <i class="fa fa-star star-rating"></i>
            <i class="fa fa-star star-rating"></i></a>
            <i>(1736) Comments</i><span class="ml-1"> |</span>
            <p class="ml-3">#47 of 723 Restourants in San sebastian-Jamica </p><span class="ml-1">|</span>
            <p class="ml-3">$$$$, Intrnational, Medeterran, European </p>
                    
        </div>
         <div class="d-flex flex-row">
            <i class="fa fa-map-marker marker"></i><h6 class="ml-1">{{$restourent->location}}</h6> 
            <p class="ml-3"> {{$restourent->phone}}</p>
            <p>{{$restourent->description}}</p>
        </div>
    </div>
    </div>
    <div class="container mt-3" >
        <div class="row">
        <div class="col-md-4 col-12 table-div pt-2 box-shadow" >
            <div class="d-flex justify-content-between">
        <h6 class="">Reserve a table</h6>
        <img src="{{asset('images/hotellogo.png')}}" class=" img-fluid float-right" width="90px" height="70px">   
    </div>
    <div class="d-flex align-items-center justify-content-center" >
    <a href = "/reserve"><button class="btn btn-lg btn-warning px-5">Reserve</button></a>
        </div>
        </div>
        <div class="col-md-5 col-12">
        <img src="{{asset('images/rest.jpg')}}" width="100%" height="100%">   
    </div>  
        <div class="col-md-3 col-12 d-flex flex-column justify-content-between">
        <img src="{{asset('images/rest1.jpg')}}" class="img-fluid "  width="100%" height="100%">
        <img src="{{asset('images/rest2.jpg')}}" class="img-fluid" width="100%" height="100%">
    </div>  
    </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New message</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">By:</label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Comment:</label>
              <textarea class="form-control" id="message-text"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">deliver</button>
        </div>
      </div>
    </div>
  </div>

  </div>

  <!-- ----------------------------- comments ------------------------- -->

  <section>
    <div class="container">
    @foreach ($comments as $comment)
        <div class="row">
            <div class="col-sm-5 col-md-6 col-12 pb-4 ">
            
            <h1>Comments</h1>
          
            <div class="comment mt-4 text-justify float-left"> <img src="https://i.imgur.com/yTFUilP.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <h4>{{$comment->user->name}}</h4> <span>- {{$comment->created_at}}</span> <br>
                    <p>{{$commnet->body}}</p>
                </div>
              </div>
              @endforeach
            <div class="col-lg-4 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12">
                <form action="{{route('restourent-comments')}}" method="POST" id="algin-form " class="comment-form">
                    <div class="form-group">
                        <h4>Leave a comment</h4> <label for="message">Message</label> <textarea name="message" id="" msg cols="30" rows="5" class="form-control" style="background-color: white;"></textarea>
                        <input type="hidden" name="retourent_id" value="{{ $retourent->id }}" />
                      </div>
                    <!-- <div class="form-group"> <label for="name">Name</label> <input type="text" name="name" id="fullname" class="form-control" style="background-color: white;"> </div> -->
                    <!-- <div class="form-group"> <label for="email">Email</label> <input type="text" name="email" id="email" class="form-control" style="background-color: white;"> </div> -->
                    <!-- <div class="form-group"> -->
                        <!-- <p class="text-secondary">If you have a <a href="#" class="alert-link">gravatar account</a> your address will be used to display your profile picture.</p> -->
                    <!-- </div> -->
                    <!-- <div class="form-inline"> <input type="checkbox" name="check" id="checkbx" class="mr-1"> <label for="subscribe">Subscribe me to the newlettter</label> </div> -->
                    <div class="form-group"> <button type="button" id="post" class="btn btn-warning p-2">Post Comment</button> </div>
                </form>
            </div>
        </div>
    </div>
  </section>






  @endsection