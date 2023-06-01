@extends('layoutwelcome')
@section('content')
<br><br><br>

<style>
   h1{text-align: center;}
</style>

<h1>   Welcome to Dormitory Management System</h1>

<br><br>
<div class="row">
<div class="col-md-3 ">
</div>
      <div class="col-md-4 ">
        <div class="card-body">
          <div class="row">
          <div>
               
          <a style="margin:20px" href="hometologin" method='get'> @csrf
    <img src="{{ asset('images/login.png')}}" width="150" alt="" class="img-fluid"> </a>
              </div>
              Login
          </div>
      </div>
      </div>
      
        <div class="col-md-4">
        <div class="card-body">
          <div class="row">
          <div>
            
          <a style="margin:20px" href="hometoregister" method='get'> @csrf
    <img src="{{ asset('images/registered.png')}}" width="150" alt="" class="img-fluid"> </a>
          </div>
           Register
      </div>
      </div>
      </div>
      

      
      </div>
      
<br><br><br><br><br><br>
@endsection