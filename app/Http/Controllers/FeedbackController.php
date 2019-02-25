<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\feedback;
use DB;
use Redirect;

class FeedbackController extends Controller
{
    public function index()
    {
          $feedback = feedback::latest()->paginate(5);
        return view('adminpanel.feedback.index', compact('feedback'))
                  ->with('i', (request()->input('page',1) -1)*5);
    
    }



    public function store(Request $request)
    {

         $feedback= new feedback;
            
            $feedback->username     =  $request->input('username');
            $feedback->event_name= $request->input('eventname');
            $feedback->comment= $request->input('comment');
            $feedback->suggestion = $request->input('suggestion');
            
            $feedback->rating= $request->input('rating');
            
            $feedback->save();

            return Redirect::to('/home');

        
    }

    public function delete($id)
    {
        $feedback= feedback::find($id);
        $feedback->delete();
        return Redirect::to('/feedback')
                        ->with('success', 'feedback deleted successfully');
    }

    public function userdetails($username)
    {
            
            
             $feedback= feedback::all()->first();
             //dd($workshopparticipant->username);
             $users=DB::table('users')->where('username','=',$feedback->username)->first();
             //dd($user);
    return view('adminpanel.feedback.show',compact('users'));

        
       
    }


   
}
