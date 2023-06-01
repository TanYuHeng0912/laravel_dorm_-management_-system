@extends('layoutStudent')
@section('content')
    <div class="row" style="background-color: rgb(64, 104, 130); color: rgb(177, 208, 224); ">
    <div class="col-sm-2"> <a href="homeStudent"><img src="https://creazilla-store.fra1.digitaloceanspaces.com/emojis/46891/fast-reverse-button-emoji-clipart-md.png" width="60" ></a></div>
<div class="col-sm-10"></div>
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <div class="card-body">
            
            
            <div class="row">
                <div class="col-md-3">
                    
                @foreach($users as $user)      
                    <img src="{{ asset('images/acc2.png')}}" width="250" alt=""> </a>
                </div>
                
                <div class="col-md-9">
                    <br>
                    Student Name: {{$user->name}}
                <h5 class="card-title"></h5>  
                    <br>
                    Age: {{$user->age}}
                    <p class="card-text"></p>           
                    <br>
                    Gender: {{$user->gender}}
                    <div class="card-heading"> </div>
                    <br>
                    <br>  
                    <a href="statustoPayment" class="btn btn-info btn-xs" 
                >Rent Status</a></td>
                <a href="{{route('editStudentInfo',['id'=>$user->id])}}" class="btn btn-info btn-xs" 
                >Edit Info</a></td>

                </div>  @endforeach  
                </form>
            </div>                
            </div>
        </div>
       
    </div>
@endsection