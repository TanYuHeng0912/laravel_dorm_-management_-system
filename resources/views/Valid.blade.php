@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    You have no Admin Authentication to access.
                    Click Here to back to user dashboard
                    <a style="margin:20px" href="home" method='get'> @csrf
    <img src="{{ asset('images/acc.png')}}" width="150" alt="" class="img-fluid"> </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection