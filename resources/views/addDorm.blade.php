@extends('layout')
@section('content')
<div class="row" style="background-color: rgb(64, 121, 127); color: rgb(177, 208, 224); font-family: 'Gill Sans MT Condensed', serif; font-size: 25px;">
<div class="col-sm-2"> <a href="Dorm"><img src="https://creazilla-store.fra1.digitaloceanspaces.com/emojis/46891/fast-reverse-button-emoji-clipart-md.png" width="60" ></a></div>
<div class="col-sm-10"></div>
<div class="col-sm-2">&nbsp;</div>
     <div class="col-sm-8">
        <form action="{{route('addDorm')}}" method="post" >  @csrf 
           <h3>Add New Dorm </h3>
            Dorm name: <input type="text" name="dormName" class="form-control"><br>
            Floor number: <input type="text" name="floorNumber" class="form-control"><br>
            Room number: <input type="text" name="roomNumber" class="form-control"><br>
            Administrator name: <input type="text" name="adminName" class="form-control"><br>

            <button type="submit" class="btn btn-info">Add Dorm</button><br><br>
        </form>  
    </div>
    <div class="col-sm-2">&nbsp;</div>
</div>
@endsection