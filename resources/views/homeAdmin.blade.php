@extends('layout')
@section('content')


<style>
   h1{text-align: center;
  }

   h2{text-align: left;
    font-family: 'Gill Sans MT Condensed', serif;
  }
   
</style>
<div style="background-color: rgb(64, 121, 127); color: rgb(177, 208, 224);">
<br><h1 style="font-family: 'Gill Sans MT Condensed', serif; font-size: 60px;">HOME PAGE</h1>


@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
       {{Session::get('success')}}
    </div>
    @endif

<br>
<div class="row" >
<div class="col-md-2 ">
</div>
      <div class="col-md-3 ">
        <div class="card-body">
          <div class="row">
          <div class="col-md-12">
               
          <a style="margin:20px" href="hometodorm" method='get'> @csrf
    <img src="{{ asset('images/dorm2.png')}}" width="150" alt="" class="img-fluid"> </a>
              </div>
              <div class="col-md-12">
             <h2> <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DORM </h2>
          </div>
          <div class="col-md-7" >
         
         <br><h1 style="font-size: 70px; font-family: 'Century Gothic', serif;">       {{$dorms}} 
</h1>

        </div>
          </div>
      </div>
      </div>
      
        <div class="col-md-3">
        <div class="card-body">
          <div class="row">
          <div class="col-md-12">
           
          <a style="margin:20px" href="hometoroom" method='get'> @csrf
    <img src="{{ asset('images/room2.png')}}" width="120" alt="" class="img-fluid"> </a>
          </div>
          
          <div class="col-md-12">
           <h2><br>&nbsp;&nbsp;&nbsp;&nbsp; ROOM</h2>
        </div>
        
        <div class="col-md-7" >
         <br><h1 style="font-size: 70px; font-family: 'Century Gothic', serif;"> {{$rooms}}  </h1>
        </div>
      </div>
      </div>
      </div>
      
        <div class="col-md-3">
          <div class="cards"></div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
            <a style="margin:20px" href="hometoacc" method='get'> @csrf
    <img src="{{ asset('images/acc2.png')}}" width="170" alt="" class="img-fluid"> </a>
              </div>
              
               <h2><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ACCOUNT</h2>
              
          </div>

          <div class="col-md-7" >
         <br><h1 style="font-size: 70px; font-family: 'Century Gothic', serif;"> &nbsp;  {{$users}} </h1>
        </div>
      </div>
      </div>
      
      </div>
     </div> 

@endsection