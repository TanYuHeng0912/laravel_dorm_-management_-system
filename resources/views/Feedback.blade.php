@extends('layoutStudent')
@section('content')
<style>
   h1{text-align: center;
      font-size: 50px;
   }
   h2{
    font-family: 'Gill Sans MT Condensed', serif;
  }
</style>
<div  style="background-color: rgb(64, 104, 130); color: rgb(177, 208, 224); font-family: 'Gill Sans MT Condensed', serif; ">
<div class="col-sm-2"> <a href="homeStudent"><img src="https://creazilla-store.fra1.digitaloceanspaces.com/emojis/46891/fast-reverse-button-emoji-clipart-md.png" width="60" ></a></div>
<div class="col-sm-10"></div>
<br>
<h1>Feedback</h1>

<br><br>
<div class="row">
<div class="col-md-3 ">
</div>
      <div class="col-md-4 ">
        <div class="card-body">
          <div class="row">
          <div>
               
          <a style="margin:20px" href="feedbacktoAdd" method='get'> @csrf
    <img src="{{ asset('images/add2.png')}}" width="150" alt="" class="img-fluid"> </a>
              </div>
              <div class="col-md-12">
             <h2><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add</h2> 
              </div>
          </div>
      </div>
      </div>
      
        <div class="col-md-4">
        <div class="card-body">
          <div class="row">
          <div>
            
          <a style="margin:20px" href="feedbacktoView" method='get'> @csrf
    <img src="{{ asset('images/view2.png')}}" width="150" alt="" class="img-fluid"> </a>
          </div>
          <div class="col-md-12">
           <h2><br>&nbsp;&nbsp;&nbsp;&nbsp;View </h2>
           </div>
      </div>
      </div>
      </div>
      
      <br><br><br>
      
      </div>
      

@endsection