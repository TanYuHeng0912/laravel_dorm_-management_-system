<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Dorm;
use App\Models\Room;
use App\Models\User;
use App\Models\myRent;
use Auth;

class RoomController extends Controller
{
    public function add(){
        $r=request();//get data from text input
        $addRoom=Room::create([
            'roomID'=>$r->roomID,
            'roomType'=>$r->roomType,
            'roomStudent'=>$r->roomStudent,
            'rentPrice'=>$r->rentPrice,
            'dormName'=>$r->dormName,
            'status'=>$r->status,
        ]);
        return redirect()->route('viewRoom');
       
    }
    public function addDormName(){
      $viewAll=Dorm::all();
      return view('addRoom')->with('dorms',$viewAll);
   }
    
    public function view(){
        $viewAll=Room::all();
        return view('viewRoom')->with('rooms',$viewAll);
     }
     
     public function delete($id){
         $deleteRoom=Room::find($id);
         $deleteRoom->delete();
         return redirect()->route('viewRoom');
      }
     
      public function edit($id){
         $room=Room::all()->where('id',$id);//select * form categories where id= '$id'
         $dormName=Dorm::all();
         return view('editRoom',compact('dormName'))->with('rooms',$room);
      }
     
      public function update(){
         $r=request();//get input value form editCategory
         $room=room::find($r->ID);//retrieve data form mySQL
         $room->roomID=$r->roomID;//binding data record form SQL
         $room->roomType=$r->roomType;//binding data record form SQL
         $room->roomStudent=$r->roomStudent;//binding data record form SQL
         $room->rentPrice=$r->rentPrice;//binding data record form SQL
         $room->dormName=$r->dormName;//binding data record form SQL
         $room->status=$r->status;//binding data record form SQL
         $room->save();//apply SQL: update categories set name= :'$catName' where id "$catID"
         return redirect()->route('viewRoom');
      }

      public function show(){
         $viewAll=Room::all();
         return view('showRoom')->with('rooms',$viewAll);
      }

      public function viewRoomStudent(){
        $viewAll=Room::all();
        return view('viewRoomStudent')->with('rooms',$viewAll);
     }
     
      public function showDetail($id){
        $room=Room::all()->where('id',$id);
        $user=user::all()->where('id','=',Auth::user()->id);
        return view('showRoomDetail')->with('rooms',$room)->with('users',$user);
     }

     public function showCheckOut($id){
      $room=Room::all()->where('id',$id);
      $user=user::all()->where('id','=',Auth::user()->id);
      $rent=DB::table('my_rents')
        ->leftjoin('rooms','rooms.id','=','my_rents.roomid')
        ->where('my_rents.userID','=',Auth::id())
        ->get();
        
      return view('checkOut')->with('rooms',$room)->with('users',$user)->with('rents',$rent);
   }

     public function showDetailAdmin($id){
      $viewAll=Room::all()->where('id',$id);
      return view('showRoomDetailAdmin')->with('rooms',$viewAll);
   }

}
