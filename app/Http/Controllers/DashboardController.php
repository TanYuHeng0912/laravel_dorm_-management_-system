<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dorm;
use App\Models\Room;
use App\Models\User;
use DB;

class DashboardController extends Controller
{

  public function index()
  {

    $dorms=Dorm::count();
    $rooms=Room::count();
    $users=User::count();
    

    return view('homeAdmin', compact('dorms','rooms','users'));
  }


}
