@extends('layoutStudent')
@section('content')

<div class="row" style="background-color: rgb(64, 104, 130); color: rgb(177, 208, 224); font-family: 'Gill Sans MT Condensed', serif; font-size: 25px;">
<div class="col-sm-2"> <a href="{{ URL::previous() }}"><img src="https://creazilla-store.fra1.digitaloceanspaces.com/emojis/46891/fast-reverse-button-emoji-clipart-md.png" width="60" ></a></div>
<div class="col-sm-10"></div>
<div class="col-sm-2"> &nbsp; </div> 
    <div class="col-sm-8">
        <form action="{{route('updateStudentInfo')}}" method="get"> @csrf

            <h3>
            Edit Info
            </h3>
            @foreach($users as $user)
         <input hidden name="id" type="text" class="form-control" value="{{$user->id}}" readonly> <br>
     Student Name: <input name="name" type="text" class="form-control" value="{{$user->name}}" > <br>
     Age:<input name="age" type="text" class="form-control" value="{{$user->age}}" > <br>
     Gender: @csrf <select name="gender" id="">
            <option value="">Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
           </select><br>
             @endforeach
           <br> <button type="submit" class="btn btn-info"> Update Info</button> <br><br>
        </form>
    </div> 
    <div class="col-sm-2"> &nbsp;</div>

</div>
@endsection