@extends('layout')
@section('content')


<div class="row" style="background-color: rgb(64, 121, 127); color: rgb(177, 208, 224); font-family: 'Gill Sans MT Condensed', serif; font-size: 25px;">
<div class="col-sm-2"> <a href="{{ URL::previous() }}"><img src="https://creazilla-store.fra1.digitaloceanspaces.com/emojis/46891/fast-reverse-button-emoji-clipart-md.png" width="60" ></a></div>
<div class="col-sm-10"></div>
<div class="col-sm-2"> &nbsp; </div> 
    <div class="col-sm-8">
        <form action="{{route('updateStudentInfoAdmin')}}" method="get"> @csrf

            <h3>
            Edit Acc
            </h3>
            @foreach($users as $user)
         <input hidden name="id" type="text" class="form-control" value="{{$user->id}}" readonly> <br>
     Student Name: <input name="name" type="text" class="form-control" value="{{$user->name}}" readonly> <br>
     Age:<input name="age" type="text" class="form-control" value="{{$user->age}}" readonly> <br>
     Gender:<input name="gender" type="text" class="form-control" value="{{$user->gender}}" readonly> <br>
     Authentication: @csrf<select name="is_admin" id="">
            <option value="">Authentication</option>
            <option value="0">Student</option>
            <option value="3">Visitor</option>
           </select>
             @endforeach
            <button type="submit" class="btn btn-info"> Update Info</button> <br><br>
        </form>
    </div> 
    <div class="col-sm-2"> &nbsp;</div>

</div>
@endsection