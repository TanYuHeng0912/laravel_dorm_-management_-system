<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Room;
use App\Models\StudentInfo;
use App\Models\myRent;
use App\Models\User;
use Auth;
use Session;

class RentController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function showMyRent(){
        $viewAll=myRent::all();
        $rent=DB::table('my_rents')
        ->leftjoin('rooms','rooms.id','=','my_rents.roomid')
        ->select('my_rents.roomId as rentID','rooms.*')
        ->where('my_rents.userID','=',Auth::id())
        ->get();
        $room=Room::all();
        return view('myRent')->with('rents',$rent)->with('rooms',$room);
    }

    public function add(){

        {
        $rent=DB::table('my_rents')
        ->leftjoin('rooms','rooms.id','=','my_rents.roomid');
        $r=request();
        $add=myRent::create([
            'roomId'=>$r->ID, 
            'userId'=>Auth::id(),
        ]);
        Session::flash('success',"Room Rented!");

    } {
        $r=request();//get input value form editCategory
        $room=room::find($r->ID);//retrieve data form mySQL
        $room->roomID=$r->roomID;//binding data record form SQL
        $room->roomType=$r->roomType;//binding data record form SQL
        $room->roomStudent=$r->roomStudent-1;//binding data record form SQL
        $room->rentPrice=$r->rentPrice;//binding data record form SQL
        $room->dormName=$r->dormName;//binding data record form SQL
        $room->save();//apply SQL: update categories set name= :'$catName' where id "$catID"
        $user=user::find($r->id);//retrieve data form mySQL
        $user->rentStatus=$r->rentStatus+1;
        $user->save();//apply SQL: update categories set name= :'$catName' where id "$catID"
        return redirect()->route('viewRoomStudent');
     }

    }

    public function out(){

        {
        $rent=DB::table('my_rents')
        ->where('my_rents.userID','=',Auth::id())
        ->delete();
        }
        {
        $r=request();//get input value form editCategory
        $room=room::find($r->ID);//retrieve data form mySQL
        $room->roomID=$r->roomID;//binding data record form SQL
        $room->roomType=$r->roomType;//binding data record form SQL
        $room->roomStudent=$r->roomStudent+1;//binding data record form SQL
        $room->rentPrice=$r->rentPrice;//binding data record form SQL
        $room->dormName=$r->dormName;//binding data record form SQL
        $room->save();//apply SQL: update categories set name= :'$catName' where id "$catID"
        $user=user::find($r->id);//retrieve data form mySQL
        $user->rentStatus=$r->rentStatus-1;
        $user->save();//apply SQL: update categories set name= :'$catName' where id "$catID"
        return redirect()->route('viewStudentInfo');
     }

    }


    public function view(){
        $rent=DB::table('my_rents')
        ->leftjoin('rooms','rooms.id','=','my_rents.roomid')
        ->get();

        $viewAll=myRent::all();
        return view('viewRent')->with('rents',$viewAll);
    }

public function update(){
    $r=request();//get input value form editCategory
    $rent=myRent::find($r->rentId);//retrieve data form mySQL
    $rent->roomId=$r->roomId;//binding data record form SQL
    $rent->userId=$r->userId;//binding data record form SQL
    return redirect()->route('viewRent');
 }
 public function edit($id){
    $rent=myRent::all()->where('id',$id);
    return view('editRent')->with('rents',$rent);
 }
}


