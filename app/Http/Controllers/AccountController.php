<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use Auth;

class AccountController extends Controller
{
   public function __construct(){
      $this->middleware('auth');
  }
    

     
     public function view(){
      $viewAll=user::all()->where('is_admin','!=',1);
      return view('viewAccount')->with('users',$viewAll);
   }

   public function delete($id){
      $deleteAccount=User::find($id);
      $deleteAccount->delete();
      return redirect()->route('viewAccount');
   }

   public function edit($id){
      $user=User::all()->where('id',$id);//select * form categories where id= '$id'
      return view('editAccount')->with('users',$user);
   }
     
      public function update(){
         $r=request();//get input value form editCategory
         $user=user::find($r->id);//retrieve data form mySQL
         $user->name=$r->name;//binding data record form SQL
         $user->age=$r->age;//binding data record form SQL
         $user->gender=$r->gender;
         $user->gender=$r->gender;//binding data record form SQL
         $user->save();//apply SQL: update categories set name= :'$catName' where id "$catID"
         return redirect()->route('viewAccount');
      }




}
