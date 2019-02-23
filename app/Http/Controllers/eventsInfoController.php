<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\event_info;
use Redirect;

class eventsInfoController extends Controller
{
    public function index(){
        $eventsInfo = event_info::latest()->paginate(5);
        return view('eventsInfo.index',compact('eventsInfo'))->with('i',(request()->input('page',1)-1)*5);

    }

    public function create(){
        return view('eventsInfo.add');
    }

    public function store(Request $request){
        $eventsInfo = new event_info;
        $eventsInfo->duration = $request->input('duration');
        $eventsInfo->date=$request->input('date');
        $eventsInfo->time=$request->input('time');
        $eventsInfo->location=$request->input('location');
        $eventsInfo->eligible_departments=$request->input('elgibDept');
        $eventsInfo->fees=$request->input('fees');
        $eventsInfo->max_member=$request->input('mMember');

        $eventsInfo->save();

        return Redirect::to('/eventsInfo')->with('message','Succesffullly Added the eventInfo..!');
    }

    public function edit($id){
        //dd($request->id);
        $eventsInfo = event_info::find($id);
        return view('eventsInfo.edit')->with('eventsInfo',$eventsInfo); 
    }

    public function update(Request $request,$id){

        $eventsInfo = event_info::find($id);
        $eventsInfo->duration=$request->input('duration');
        $eventsInfo->date=$request->input('date');
        $eventsInfo->time=$request->input('time');
        $eventsInfo->location=$request->input('location');
        $eventsInfo->eligible_departments=$request->input('elgibDept');
        $eventsInfo->fees=$request->input('fees');
        $eventsInfo->max_member=$request->input('mMember');

        $eventsInfo->save();

        return Redirect::to('/eventsInfo')->with('message','Succesffullly Updated the eventInfo..!');
    }

    public function destroy($id){
        $eventsInfo = event_info::find($id);
        $eventsInfo->delete();

        return Redirect::to('/eventsInfo')->with('message','EventInfo Deleted Successfully..!');
    }
}
