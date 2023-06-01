@extends('layout')
@section('content')

<div class="row" style="background-color: rgb(64, 121, 127); color: rgb(177, 208, 224); font-family: 'Gill Sans MT Condensed', serif; font-size: 25px;">
<div class="col-sm-2"> <a href="{{ URL::previous() }}"><img src="https://creazilla-store.fra1.digitaloceanspaces.com/emojis/46891/fast-reverse-button-emoji-clipart-md.png" width="60" ></a></div>
<div class="col-sm-10"></div>
<div class="col-sm-2"> &nbsp; </div> 
    <div class="col-sm-8">
        <form action="{{route('updateFeedback')}}" method="get">  @csrf

            <h3>
            Edit Feedback
            </h3>
            @foreach($feedbacks as $feedback)
            <input hidden  name="Fid" type="text" class="form-control" value="{{$feedback->id}}" readonly> <br>
     StudentName: <input name="studentName" type="text" class="form-control" value="{{$feedback->studentName}}" readonly> <br>
     Topic: <input name="topic" type="text" class="form-control" value="{{$feedback->topic}}" readonly> <br>
     Feedback:<input name="feedback" type="text" class="form-control" value="{{$feedback->feedback}}" readonly> <br>
     Reply:<input name="reply" type="text" class="form-control" value="{{$feedback->reply}}" > <br>
        <input hidden name="feedbackUserId" type="text" class="form-control" value="{{$feedback->feedbackUserId}}" > <br>
     
             @endforeach
            <button type="submit" class="btn btn-info">Send Reply</button> <br><br>
        </form>
    </div> 
    <div class="col-sm-2"> &nbsp;</div>

</div>
@endsection