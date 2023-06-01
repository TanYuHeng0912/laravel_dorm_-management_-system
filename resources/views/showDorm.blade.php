@extends('layout')
@section('content')
  <div class="row" style="background-color: rgb(64, 121, 127); color: rgb(177, 208, 224); font-family: 'Gill Sans MT Condensed', serif; font-size: 25px;">
    @foreach($dorms as $dorm)
     <div class="col-sm-4">
        <div class="card-body">
          <h5 class="card-title">{{$dorm->name}}</h5>
          
          Floor Number:
          <p class="card-text">{{$dorm->floorNumber}}</p>
          
          Room Number:
          <div class="card-heading">{{$dorm->roomNumber}}</div><br>

          Administrator:
          <div class="card-heading">{{$dorm->adminName}}</div>
          
        </div>
     </div>
     @endforeach
  </div>
@endsection