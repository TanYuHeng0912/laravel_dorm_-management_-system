@extends('layout')
@section('content')

<div class="row">
    <div class="col-sm-2"> &nbsp; </div> 
    <div class="col-sm-8">
        <form action="{{route('updateRoom')}}" method="get"> <br><br> @csrf
            <h3>
            Edit Room
            </h3>
            @foreach($rooms as $room)
      ID: <input name="ID" type="text" class="form-control" value="{{$room->id}}" readonly> <br>
     Room ID: <input name="roomID" type="text" class="form-control" value="{{$room->roomID}}" > <br>
     Room Type:<input name="roomType" type="text" class="form-control" value="{{$room->roomType}}" > <br>

         
             @endforeach
            <button type="submit" class="btn btn-info"> Update Dorm</button> <br><br>
        </form>
    </div> 
    <div class="col-sm-2"> &nbsp;</div>

</div>
@endsection