@extends('layoutStudent')
@section('content')
    <div class="row" style="background-color: rgb(64, 104, 130); color: rgb(177, 208, 224); font-family: 'Gill Sans MT Condensed', serif; font-size: 25px;">
        @foreach($feedbacks as $feedback)
        <div class="col-sm-2"> <a href="{{ URL::previous() }}"><img src="https://creazilla-store.fra1.digitaloceanspaces.com/emojis/46891/fast-reverse-button-emoji-clipart-md.png" width="60" ></a></div>
<div class="col-sm-10"></div>
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <div class="card-body">

                
            <div class="row">
                <div class="col-md-3">
                    Student Name:
                    <h5 class="card-title">{{$feedback->studentName}}</h5>                   
                    <img src="{{ asset('images/feedback2.png')}}" width="250" alt=""> </a>
                </div>
                <div class="col-md-9">
                    <br>
                    Topic:
                    <p class="card-text">{{$feedback->topic}}</p>
                    
                    <br>
                    Description:
                    <div class="card-heading"> {{$feedback->feedback}}</div>
                    <br>
                    Reply:
                    <div class="card-heading"> {{$feedback->reply}}</div>
                    <br>
 
                </div>
                </form>

            </div>                
            </div>
        </div>
        @endforeach
    </div>
@endsection