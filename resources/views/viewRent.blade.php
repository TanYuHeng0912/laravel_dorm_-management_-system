@extends('layout')
@section('content')
<div class="row" style="background-color: rgb(64, 121, 127); color: rgb(177, 208, 224); ">
    <div class="col-sm-2"> &nbsp; </div> 
    <div class="col-sm-8">
        <table class="table table-bordered" style="font-family: 'Gill Sans MT Condensed', serif; color: rgb(177, 208, 224); font-size: 30px;">
        <thead>
           <br> 
           <tr>
                
             <td>Room ID</td>
             <td>User ID</td>
             <td>Rental Price</td>
             <td>Available</td>

           </tr>
        </thead>
        <tbody>
            @foreach($rents as $rent)
            <tr>
                <td hidden>{{$rent->id}}</td>
                <td>{{$rent->roomId}}</td>
                <td>{{$rent->userId}}</td>


                
          <td>
          <a href="{{route('editRent',['id'=>$rent->id])}}" class="btn btn-info btn-xs" 
                >reply</a></td>
                @endforeach  
            </tr>
          
        </tbody>


        </table>
    </div> 
    <div class="col-sm-2"> &nbsp;</div>

</div>
@endsection
