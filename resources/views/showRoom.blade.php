@extends('layout')
@section('content')
<div class="row" style="background-color: rgb(64, 121, 127); color: rgb(177, 208, 224); font-family: 'Gill Sans MT Condensed', serif; font-size: 25px;">
    <div class="col-sm-2"> &nbsp; </div> 
    <div class="col-sm-8">
        <table>
        <thead>
           <tr>
             <td>ID</td>
             <td>Room ID</td>
             <td>Room Type</td>
             <td>Student Number</td>
             <td>Rental Price</td>
             <td>Status</td>
             <td>Action</td>
           </tr>
        </thead>
        <tbody>
            @foreach($rooms as $room)
            <tr>
                <td>{{$room->id}}</td>
                <td>{{$room->roomID}}</td>
                <td>{{$room->roomType}}</td>
                <td>{{$room->roomStudent}}</td>
                <td>{{$room->rentPrice}}</td>
                <td>{{$room->status}}</td>
                <td></td>
                <td>
                <a href="{{route('showRoomDetailAdmin',['id'=>$room->id])}}" class="btn btn-info btn-xs" 
                >view</a></td>
            </tr>
            @endforeach  
        </tbody>


        </table>
    </div> 
    <div class="col-sm-2"> &nbsp;</div>

</div>
@endsection