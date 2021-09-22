    @extends('layouts.app')
    @section('content')
    <div class="container ">
    <form class="box-shadow p-5">
    <h4 class="text-center mb-3">Details</h4>
    <div class="row ">
    <div class="mb-3 form-group col-sm-6 p-3">
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name...">
      </div>
      <div class="mb-3 form-group col-sm-6 p-3">
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last Name...">
      </div>
      <div class="mb-3 form-group col-sm-6 p-3">
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email...">
      </div>
      <div class="mb-3 form-group col-sm-6 p-3">
        <input type="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone...">
      </div>  
    <div class="mb-3 form-group col-sm-6 p-3">
        <label for="exampleInputEmail1" class="form-label">Select Date</label>
        <input type="text" onclick="(this.type = 'date')" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

      </div>

      <div class="lunch d-flex justify-content-sapce">
      <div class="form-check  mx-3">
      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
      <label class="form-check-label" for="flexRadioDefault1">
        Lunch
      </label>
      
    </div>
    <select class="form-select-sm" aria-label="Default select example">
      <option selected>Select Timing</option>
      <option value="1">13:00</option>
      <option value="2">13:30</option>
      <option value="3">14:00</option>
      <option value="4">14:30</option>

    </select>
      </div>
      <div class="lunch d-flex justify-content-sapce mt-3">

      <div class="form-check mx-3 ">
      <input class="form-check-input " type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
      <label class="form-check-label" for="flexRadioDefault2">
        Dinner
      </label>
    </div>
    <select class="form-select-sm" aria-label="Default select example">
      <option selected>Select Timing</option>
      <option value="1">20:00</option>
      <option value="2">20:30</option>
      <option value="3">21:00</option>  
      <option value="4">21:30</option>

    </select>
      </div>
      <div class="mb-3 form-group col-sm-6 p-3">
        <label for="exampleInput" class="form-label">Select People</label>
        <input type="text" onclick="(this.type = 'number')" class="form-control" id="exampleInput" aria-describedby="emailHelp">
      </div>
    </div>
    <div class="col-md-2 mt-2">
      <button type="submit" class="btn btn-outline-success px-5">Book</button>
      </div>  
    </form>

    </div>
    @endsection