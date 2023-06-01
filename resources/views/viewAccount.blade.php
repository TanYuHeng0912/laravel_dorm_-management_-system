@extends('layout')
@section('content')
<div class="row" style="background-color: rgb(64, 121, 127); color: rgb(177, 208, 224); ">
<div class="col-sm-2"> <a href="Account"><img src="https://creazilla-store.fra1.digitaloceanspaces.com/emojis/46891/fast-reverse-button-emoji-clipart-md.png" width="60" ></a></div>
<div class="col-sm-10"></div>
    <div class="col-sm-2"> &nbsp; </div> 
    <div class="col-sm-8">
        <table class="table table-bordered" style="font-family: 'Gill Sans MT Condensed', serif; color: rgb(177, 208, 224); font-size: 30px;">
        <thead>
        <br>
           <tr>
             <td>ID</td>
             <td>Name</td>
             <td>Email </td>
             <td>Authentication</td>
             <td>Age</td>
             <td>Gender</td>
             <td>Rent Status</td>
           </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->is_admin}}</td>
                <td>{{$user->age}}</td>
                <td>{{$user->gender}}</td>
                <td>{{$user->rentStatus}}</td>
              
                <td><a href="{{route('deleteAccount',['id'=>$user->id])}}" class="btn btn-danger btn-xs" 
                onClick="return confirm('Are you sure to delete?')">Delete</a>
                <a href="{{route('editAccount',['id'=>$user->id])}}" class="btn btn-info btn-xs" 
                >Edit</a></td>
            </tr>
            @endforeach  
        </tbody>


        </table>
    </div> 
    <div class="col-sm-2"> &nbsp;</div>

</div>
@endsection

