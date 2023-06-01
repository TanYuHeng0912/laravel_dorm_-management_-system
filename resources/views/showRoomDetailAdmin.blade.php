@extends('layout')
@section('content')
    <div class="row"  style="background-color: rgb(64, 121, 127); color: rgb(177, 208, 224); font-family: 'Gill Sans MT Condensed', serif; font-size: 25px;">
        @foreach($rooms as $room)
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <div class="card-body">
            
            <a href="{{ URL::previous() }}" class="btn btn-warning"> <i class="fas fa-arrow-left"></i> Go Back</a>
            <div class="row">
                <div class="col-md-3">
                    Room ID:
                    <h5 class="card-title">{{$room->roomID}}</h5>                   
                    <img src="{{ asset('images/room2.png')}}" width="250" alt=""> </a>
                </div>
                <div class="col-md-9">
                    <br>
                    Room Type:
                    <p class="card-text">{{$room->roomType}}</p>
                    
                    <br>
                    Student Number:
                    <div class="card-heading"> {{$room->roomStudent}}</div>
                    <br>
                    Rental Price:
                    <div class="card-heading">RM {{$room->rentPrice}}</div>
                    <br>
                    Status:
                    <div class="card-heading">{{$room->status}}</div>
                    <br>
                    
                </div>
                </form>
            </div>                
            </div>
        </div>
        @endforeach
    </div>
@endsection