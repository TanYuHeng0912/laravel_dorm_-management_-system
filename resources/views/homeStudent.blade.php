@extends('layoutStudent')
@section('content')


<style>
   h1{text-align: center;
  }

   h2{text-align: left;
    font-family: 'Gill Sans MT Condensed', serif;
  }
   
</style>
<div style="background-color: rgb(64, 104, 130); color: rgb(177, 208, 224);">
<br><h1 style="font-family: 'Gill Sans MT Condensed', serif; font-size: 60px;">HOME PAGE</h1>

<br><br>
<div class="row">
<div class="col-md-2 ">
</div>
      <div class="col-md-3 ">
        <div class="card-body">
          <div class="row">
          <div>
               
          <a style="margin:20px" href="hometoRent" method='get'> @csrf
    <img src="{{ asset('images/rent2.png')}}" width="150" alt="" class="img-fluid"> </a>
              </div>
              <div class="col-md-12">
             <h2> <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; RENT </h2>
          </div>
          </div>
      </div>
      </div>
      
        <div class="col-md-3">
        <div class="card-body">
          <div class="row">
          <div>
            
          <a style="margin:20px" href="hometoFeedback" method='get'> @csrf
    <img src="{{ asset('images/feedback2.png')}}" width="150" alt="" class="img-fluid"> </a>
          </div>
           
          <div class="col-md-12">
           <h2><br>&nbsp;&nbsp; FEEDBACK</h2>
        </div>
      </div>
      </div>
      </div>
      
        <div class="col-md-3">
          <div class="cards"></div>
        <div class="card-body">
          <div class="row">
            <div>
            <a style="margin:20px" href="hometoStatus" method='get'> @csrf
    <img src="{{ asset('images/acc2.png')}}" width="150" alt="" class="img-fluid"> </a>
              </div>
              <h2><br>&nbsp;&nbsp;STUDENT STATUS</h2>
          </div>
      </div>
      </div>
      
      </div>
      

@endsection