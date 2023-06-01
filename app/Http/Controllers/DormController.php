<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Dorm;

class DormController extends Controller
{
    public function add(){
        $r=request();//get data from text input
        $addDorm=Dorm::create([
            'name'=>$r->dormName,
            'floorNumber'=>$r->floorNumber,
            'roomNumber'=>$r->roomNumber,
            'adminName'=>$r->adminName,
        ]);
        return redirect()->route('viewDorm');
       
    }
    
    public function view(){
        $viewAll=Dorm::all();
        return view('viewDorm')->with('dorms',$viewAll);
     }
     
     public function delete($id){
         $deleteDorm=Dorm::find($id);
         $deleteDorm->delete();
         return redirect()->route('viewDorm');
      }
     
      public function edit($id){
         $dorm=Dorm::all()->where('id',$id);//select * form categories where id= '$id'
         return view('editDorm')->with('dorms',$dorm);
      }
     
      public function update(){
         $r=request();//get input value form editCategory
         $dorm=dorm::find($r->dormID);//retrieve data form mySQL
         $dorm->name=$r->dormName;//binding data record form SQL
         $dorm->floorNumber=$r->floorNumber;//binding data record form SQL
         $dorm->roomNumber=$r->roomNumber;//binding data record form SQL
         $dorm->adminName=$r->adminName;//binding data record form SQL
         $dorm->save();//apply SQL: update categories set name= :'$catName' where id "$catID"
         return redirect()->route('viewDorm');
      }

      public function show(){
         $viewAll=Dorm::all();
         return view('showDorm')->with('dorms',$viewAll);
      }
     
      public function showDetail($id){
        $viewAll=Dorm::all()->where('id',$id);
        return view('showDormDetail')->with('dorms',$viewAll);
     }


}
