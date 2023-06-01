<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use Auth;

class StudentInfoController extends Controller
{
   public function __construct(){
      $this->middleware('auth');
  }
    
    public function view(){
        $user=user::all()->where('id','=',Auth::user()->id);
        return view('viewStudentInfo')->with('users',$user);
     }
     

     
      public function edit($id){
         $user=user::all()->where('id',$id);//select * form categories where id= '$id'
         return view('editStudentInfo')->with('users',$user);
      }
     
      public function update(){
         $r=request();//get input value form editCategory
         $user=user::find($r->id);//retrieve data form mySQL
         $user->name=$r->name;//binding data record form SQL
         $user->age=$r->age;//binding data record form SQL
         $user->gender=$r->gender;//binding data record form SQL
         $user->save();//apply SQL: update categories set name= :'$catName' where id "$catID"
         return redirect()->route('viewStudentInfo');
      }

      public function updateAdmin(){
         $r=request();//get input value form editCategory
         $user=user::find($r->id);//retrieve data form mySQL
         $user->name=$r->name;//binding data record form SQL
         $user->age=$r->age;//binding data record form SQL
         $user->gender=$r->gender;//binding data record form SQL
         $user->is_admin=$r->is_admin;
         $user->save();//apply SQL: update categories set name= :'$catName' where id "$catID"
         return redirect()->route('viewAccount');
      }





}
