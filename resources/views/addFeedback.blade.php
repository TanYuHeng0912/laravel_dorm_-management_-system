@extends('layoutStudent')
@section('content')
<div class="row" style="background-color: rgb(64, 104, 130); color: rgb(177, 208, 224); font-family: 'Gill Sans MT Condensed', serif; font-size: 25px;">
<div class="col-sm-2"> <a href="Feedback"><img src="https://creazilla-store.fra1.digitaloceanspaces.com/emojis/46891/fast-reverse-button-emoji-clipart-md.png" width="60" ></a></div>
<div class="col-sm-10"></div>
<div class="col-sm-2">&nbsp;</div>
     <div class="col-sm-8">
        <form action="{{route('addFeedback')}}" method="post" >  @csrf 
           <h3>Add Feedback </h3>
            Student name: <input type="text" name="studentName" class="form-control"><br>
            Topic: <input type="text" name="topic" class="form-control"><br>
            Feedback: <input type="text" name="feedback" class="form-control"><br>
            <input hidden type="text" name="feedbackUserId" class="form-control"><br>
            
            <button type="submit" class="btn btn-info">Add Feedback</button><br><br>
        </form>  
    </div>
    <div class="col-sm-2">&nbsp;</div>
</div>
@endsection