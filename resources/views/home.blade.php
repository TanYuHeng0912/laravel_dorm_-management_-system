@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    You are normal user.
                    Click Here to access user home page
                    <a style="margin:20px" href="homeStudent" method='get'> @csrf
    <img src="{{ asset('images/acc.png')}}" width="150" alt="" class="img-fluid"> </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection