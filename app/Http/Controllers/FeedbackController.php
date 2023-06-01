<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Feedback;
use Auth;

class FeedbackController extends Controller
{

   public function __construct(){
      $this->middleware('auth');
   }

    public function add(){
        $r=request();//get data from text input
        $addFeedback=Feedback::create([
            'studentName'=>$r->studentName,
            'topic'=>$r->topic,
            'feedback'=>$r->feedback,
            'feedbackUserId'=>Auth::id()
            
            
        ]);
        return redirect()->route('viewFeedbackStudent');
       
    }
    
      public function addReply(){
          $r=request();//get data from text input
          $addFeedback=Feedback::create([
              'reply'=>$r->reply,
              
          ]);
          return view('addReply');
         
      }
    public function view(){
        $viewAll=Feedback::all();
        return view('viewFeedback')->with('feedbacks',$viewAll);
     }
     
     public function delete($id){
        $deleteFeedback=Feedback::find($id);
        $deleteFeedback->delete();
        return redirect()->route('viewFeedback');
     }

     public function edit($id){
      $feedback=Feedback::all()->where('id',$id);//select * form categories where id= '$id'
      return view('editFeedback')->with('feedbacks',$feedback);
   }
     public function update(){
        $r=request();//get input value form editCategory
        $feedback=feedback::find($r->Fid);//retrieve data form mySQL
        $feedback->studentName=$r->studentName;
        $feedback->topic=$r->topic;
        $feedback->feedback=$r->feedback;
        $feedback->reply=$r->reply;
        $feedback->feedbackUserId=$r->feedbackUserId;
//binding data record form SQL
        $feedback->save();//apply SQL: update categories set name= :'$catName' where id "$catID"
        return redirect()->route('viewFeedback');
     }

      public function showDetail($id){
        $viewAll=Feedback::all()->where('id',$id);
        return view('showFeedback')->with('feedbacks',$viewAll);
     }
    
     public function viewStudent(){
        $viewAll=Feedback::all()->where('feedbackUserId','=',Auth::id());
        return view('viewFeedbackStudent')->with('feedbacks',$viewAll);
     }

     public function showDetailStudent($id){
        $viewAll=Feedback::all()->where('id',$id);
        return view('showFeedbackStudent')->with('feedbacks',$viewAll);
     }

}
     