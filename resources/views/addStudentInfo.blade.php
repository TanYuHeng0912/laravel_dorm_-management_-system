@extends('layout')
@section('content')
<div class="row" style="background-color: rgb(64, 121, 127); color: rgb(177, 208, 224); font-family: 'Gill Sans MT Condensed', serif; font-size: 25px;">
    <div class="col-sm-2">&nbsp;</div>
     <div class="col-sm-8">
        <form action="{{route('addStudentInfo')}}" method="post" > <br><br> @csrf 
           <h3>Add New Dorm </h3>
            Student Name: <input type="text" name="studentName" class="form-control"><br>
            Age: <input type="text" name="age" class="form-control"><br>
            Gender: <input type="text" name="gender" class="form-control"><br>
            Student ID: <input type="text" name="studentId" class="form-control"><br>

            <button type="submit" class="btn btn-info">Add Student Info</button><br><br>
        </form>  
    </div>
    <div class="col-sm-2">&nbsp;</div>
</div>
@endsection