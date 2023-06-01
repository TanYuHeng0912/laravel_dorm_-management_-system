@extends('layout')
@section('content')

<div class="row"  style="background-color: rgb(64, 121, 127); color: rgb(177, 208, 224); font-family: 'Gill Sans MT Condensed', serif; font-size: 25px;">
    <div class="col-sm-2"> &nbsp; </div> 
    <div class="col-sm-8">
        <form action="{{route('updateRent')}}" method="get"> <br><br> @csrf
        <a href="{{ URL::previous() }}" class="btn btn-warning"> <i class="fas fa-arrow-left"></i> Go Back</a>
            <h3>
            Edit Rent
            </h3>
            @foreach($rents as $rent)
     <input hidden name="id" type="text" class="form-control" value="{{$rent->id}}" readonly> <br>
     Room ID: <input name="roomId" type="text" class="form-control" value="{{$rent->roomId}}" > <br>
     User ID: <input name="userId" type="text" class="form-control" value="{{$rent->userId}}" > <br>


             @endforeach
            <button type="submit" class="btn btn-info"> Update Rent</button> <br><br>
        </form>
    </div> 
    <div class="col-sm-2"> &nbsp;</div>

</div>
@endsection