@extends('layout')
@section('content')
<div class="row" style="background-color: rgb(64, 121, 127); color: rgb(177, 208, 224); font-family: 'Gill Sans MT Condensed', serif; font-size: 25px;">
<div class="col-sm-2"> <a href="Room"><img src="https://creazilla-store.fra1.digitaloceanspaces.com/emojis/46891/fast-reverse-button-emoji-clipart-md.png" width="60" ></a></div>
<div class="col-sm-10"></div>
    <div class="col-sm-2">&nbsp;</div>
     <div class="col-sm-8">
     
        <form action="{{route('addRoom')}}" method="any" > @csrf 
           <h3>Add New Room </h3><br>
           Dorm:<select name="dormName" id="">  
         
         <option value="">Select Dorm</option> 
         @foreach($dorms as $dorm)        
         <option value="{{$dorm->name}}">{{$dorm->name}}</option>
         @endforeach
        </select> <br>
            Room ID: <input type="text" name="roomID" class="form-control"><br>
            Room Type: <input type="text" name="roomType" class="form-control"><br>
            Student Number: <input type="int" name="roomStudent" class="form-control"><br>
            Rental Price: <input type="int" name="rentPrice" class="form-control"><br>
            Status:<select name="status" id="">         
         <option value="">Status</option>            
         <option value="Valid">Valid</option>
         <option value="inValid">InValid</option>
         </select> <br><br>
         
            <button type="submit" class="btn btn-info">Add Room</button><br><br>
        </form>  
    </div>
  
</div>
@endsection