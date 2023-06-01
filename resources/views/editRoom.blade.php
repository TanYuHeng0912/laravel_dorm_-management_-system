@extends('layout')
@section('content')

<div class="row" style="background-color: rgb(64, 121, 127); color: rgb(177, 208, 224); font-family: 'Gill Sans MT Condensed', serif; font-size: 25px;">
<div class="col-sm-2"> <a href="{{ URL::previous() }}"><img src="https://creazilla-store.fra1.digitaloceanspaces.com/emojis/46891/fast-reverse-button-emoji-clipart-md.png" width="60" ></a></div>
<div class="col-sm-10"></div>
<div class="col-sm-2"> &nbsp; </div> 
    <div class="col-sm-8">
        <form action="{{route('updateRoom')}}" method="get">  @csrf

            <h3>
            Edit Room
            </h3><br>
            Dorm:<select name="dormName" id="">  
         
         <option value="">Select Dorm</option> 
         @foreach($dormName as $dorm)        
         <option value="{{$dorm->name}}">{{$dorm->name}}</option>
         @endforeach
        </select>
            @foreach($rooms as $room)
           
     <input hidden name="ID" type="text" class="form-control" value="{{$room->id}}" readonly> <br>
     Room ID: <input name="roomID" type="text" class="form-control" value="{{$room->roomID}}" > <br>
     Room Type:<input name="roomType" type="text" class="form-control" value="{{$room->roomType}}" > <br>
     Student Number:<input name="roomStudent" type="text" class="form-control" value="{{$room->roomStudent}}" > <br>
     Rental Price:<input name="rentPrice" type="text" class="form-control" value="{{$room->rentPrice}}" > <br>
     Status:<select name="status" id="">  
         
         <option value="">Status</option>            
         <option value="Valid">Valid</option>
         <option value="inValid">InValid</option>
        
        </select>
     @endforeach

       

         
            
             
             <button type="submit" class="btn btn-info"> Update Room</button> <br><br>
        </form>
    </div> 
    <div class="col-sm-2"> &nbsp;</div>

</div>
@endsection