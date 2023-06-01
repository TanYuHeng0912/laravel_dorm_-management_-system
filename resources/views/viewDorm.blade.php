@extends('layout')
@section('content')
<div class="row" style="background-color: rgb(64, 121, 127); color: rgb(177, 208, 224); ">
<div class="col-sm-2"> <a href="Dorm"><img src="https://creazilla-store.fra1.digitaloceanspaces.com/emojis/46891/fast-reverse-button-emoji-clipart-md.png" width="60" ></a></div>
<div class="col-sm-10"></div>
    <div class="col-sm-2"> &nbsp; </div> 
    <div class="col-sm-8">
        <table class="table table-bordered" style="font-family: 'Gill Sans MT Condensed', serif; color: rgb(177, 208, 224); font-size: 30px;">
        <thead>
        <br>
           <tr>
             
             <td>Dorm Name</td>
             <td>Floor Number</td>
             <td>Room Number</td>
             <td>Administrator Name</td>
             <td>Action</td>
           </tr>
        </thead>
        <tbody>
            @foreach($dorms as $dorm)
            <tr>
                
                <td>{{$dorm->name}}</td>
                <td>{{$dorm->floorNumber}}</td>
                <td>{{$dorm->roomNumber}}</td>
                <td>{{$dorm->adminName}}</td>
              
                <td><a href="{{route('deleteDorm',['id'=>$dorm->id])}}" class="btn btn-danger btn-xs" 
                onClick="return confirm('Are you sure to delete?')">Delete</a>
                <a href="{{route('editDorm',['id'=>$dorm->id])}}" class="btn btn-info btn-xs" 
                >Edit</a></td>
            </tr>
            @endforeach  
        </tbody>


        </table>
    </div> 
    <div class="col-sm-2"> &nbsp;</div>

</div>
@endsection
