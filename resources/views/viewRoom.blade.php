@extends('layout')
@section('content')
<div class="row" style="background-color: rgb(64, 121, 127); color: rgb(177, 208, 224); ">
<div class="col-sm-2"> <a href="Room"><img src="https://creazilla-store.fra1.digitaloceanspaces.com/emojis/46891/fast-reverse-button-emoji-clipart-md.png" width="60" ></a></div>
<div class="col-sm-10"></div>
    <div class="col-sm-2"> &nbsp; </div> 
    <div class="col-sm-8">
        <table class="table table-bordered" style="font-family: 'Gill Sans MT Condensed', serif; color: rgb(177, 208, 224); font-size: 30px;">
        <thead>
           <tr>
           <br>
         
             <td>Room ID</td>
             <td>Room Type</td>
             <td>Student Number</td>
             <td>Rental Price</td>
             <td>Dorm Name</td>
             <td>Status</td>
             <td>Action</td>
           </tr>
        </thead>
        <tbody>
            @foreach($rooms as $room)
            <tr>
                
                <td>{{$room->roomID}}</td>
                <td>{{$room->roomType}}</td>
                <td>{{$room->roomStudent}}</td>
                <td>{{$room->rentPrice}}</td>
                <td>{{$room->dormName}}</td>
                <td>{{$room->status}}</td>
                <td><a href="{{route('deleteRoom',['id'=>$room->id])}}" class="btn btn-danger btn-xs" 
                onClick="return confirm('Are you sure to delete?')">Delete</a>
                <a href="{{route('editRoom',['id'=>$room->id])}}" class="btn btn-info btn-xs" 
                >Edit</a></td>
            </tr>
            @endforeach  
        </tbody>


        </table>
    </div> 
    <div class="col-sm-2"> &nbsp;</div>

</div>
@endsection