<?php
   
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Dorm;
use App\Models\Room;
use App\Models\User;
use DB;
   
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('homeStudent');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $dorms=Dorm::count();
        $rooms=Room::count();
        $users=User::count();
        
        return view('homeAdmin', compact('dorms','rooms','users'));
    }
    
        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function visitorHome()
    {
        return view('visitorHome');
    }
}