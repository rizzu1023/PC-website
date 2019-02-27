<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\event_participants;
use Redirect;
use DB;

class eventsParticipantController extends Controller
{
    public function index(){
        $eventsParticipant = event_participants::latest()->paginate(5);
        return view('adminpanel.eventsParticipant.index',compact('eventsParticipant'))->with('i',(request()->input('page',1)-1)*5);
    }

    public function create(){
        return view('adminpanel.eventsParticipant.add');
    }

    public function store(Request $request){

        $eventsParticipant = new event_participants;

        $eventsParticipant->event_name=$request->input('name');
        $eventsParticipant->team_name=$request->input('tname');
        $eventsParticipant->no_of_members=$request->input('nmembers');
        $eventsParticipant->username_1=$request->input('pname1');
        $eventsParticipant->username_2=$request->input('pname2');
        $eventsParticipant->username_3=$request->input('pname3');
        $eventsParticipant->username_4=$request->input('pname4');
        $eventsParticipant->payment=$request->input('payment');

        $eventsParticipant->save();

        return Redirect::to('/eventsParticipant')->with('message','Participant Added Successfully..!');

    }

    public function edit($id){

        $eventsParticipant = event_participants::find($id);
        return view('adminpanel.eventsParticipant.edit')->with('eventsParticipant',$eventsParticipant); 

    }

    public function update(Request $request,$id){

        $eventsParticipant = event_participants::find($id);

        $eventsParticipant->event_name=$request->input('name');
        $eventsParticipant->team_name=$request->input('tname');
        $eventsParticipant->no_of_members=$request->input('nmembers');
        $eventsParticipant->username_1=$request->input('pname1');
        $eventsParticipant->username_2=$request->input('pname2');
        $eventsParticipant->username_3=$request->input('pname3');
        $eventsParticipant->username_4=$request->input('pname4');
        $eventsParticipant->payment=$request->input('payment');

        $eventsParticipant->save();

        return Redirect::to('/eventsParticipant')->with('message','Participant Updated Successfully..!');

    }

    public function destroy($id){
        $eventsParticipant = event_participants::find($id);
        $eventsParticipant->delete();
        return Redirect::to('/eventsParticipant')->with('message','EventPArticipant Deleted Successfully...!');
    }


    public function userdetails()
    {
    
             $event= event_participants::all()->first();
             $user1=$event->username_1;
             $user2=$event->username_2;
             $user3=$event->username_3;
             $user4=$event->username_4;
             
        
        $user1=DB::table('users')->where('username','=',$user1)->first();
        $user2=DB::table('users')->where('username','=',$user2)->first();
        $user3=DB::table('users')->where('username','=',$user3)->first();
        $user4=DB::table('users')->where('username','=',$user4)->first();
        
        //dd($user_1,$user_2);
        return view('adminpanel.eventsParticipant.show',compact('user1','user2','user3','user4'));
        //return view('eventsParticipant.show',['user1','user2','user3','user4']);

        
       
    }

}
