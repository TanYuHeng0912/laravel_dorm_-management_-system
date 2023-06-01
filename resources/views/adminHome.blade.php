@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    You are Admin.
Click Here to access admin home page
                    <a style="margin:20px" href="homeAdmin" method='get'> @csrf
    <img src="{{ asset('images/admin.jpg')}}" width="150" alt="" class="img-fluid"> </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection