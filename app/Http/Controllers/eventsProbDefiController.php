<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\event_problem_definition;
use App\event_schedule;
use Redirect;

class eventsProbDefiController extends Controller
{
    public function index(){

        $eventsPdefinition = event_problem_definition::latest()->paginate();
        return view('adminpanel.eventsPdefinition.index',compact('eventsPdefinition'))->with('i',(request()->input('page',1)-1)*5);    
  
    }

    public function create(){
        return view('adminpanel.eventsPdefinition.add');
    }

    public function store(Request $request){
        $eventsPdefinition = new event_problem_definition;

        $eventsPdefinition->title=$request->input('title');
        $eventsPdefinition->description=$request->input('description');
        $eventsPdefinition->status=$request->input('status');

        $eventsPdefinition->save();

        return Redirect::to('admin/eventsPdefinition')->with('success','Successfully Addes the problem Difinition..!');
    }

    public function edit($id){
        $eventsPdefinition = event_problem_definition::find($id);
        return view('adminpanel.eventsPdefinition.edit')->with('eventsPdefinition',$eventsPdefinition);
    }

    public function update(Request $request,$id){

        $eventsPdefinition = event_problem_definition::find($id);

        $eventsPdefinition->title=$request->input('title');
        $eventsPdefinition->description=$request->input('description');
        $eventsPdefinition->status=$request->input('status');

        $eventsPdefinition->save();

        return Redirect::to('admin/eventsPdefinition')->with('success','Successfully Addes the problem Difinition..!');

    }

    public function destroy($id){

        $eventsPdefinition = event_problem_definition::find($id);

        $eventsPdefinition->delete();        

        return Redirect::to('admin/eventsPdefinition')->with('success','Problem Definition Deleted Successfully..!');
    }

    // Events Shedule Function

    public function sindex(){
        $eventSchedule = event_schedule::latest()->paginate(5);
        return view('adminpanel.eventSchedule.sindex',compact('eventSchedule'))->with('i',(request()->input('page',1)-1)*5);
    }

    public function screate(){
        return view('adminpanel.eventSchedule.sadd');
    }

    public function sstore(Request $request){
        $eventSchedule = new event_schedule;

        $eventSchedule->title=$request->input('title');
        $eventSchedule->start_time=$request->input('stime');
        $eventSchedule->end_time=$request->input('etime');
        $eventSchedule->status=$request->input('status');

        $eventSchedule->save();

        return Redirect::to('/admin/eventSchedule')->with('success','Event Scheduled Added Successfully..!');
    }

    public function sedit($id){
        $eventSchedule = event_schedule::find($id);
        return view('adminpanel.eventSchedule.sedit')->with('eventSchedule',$eventSchedule);
    }

    public function supdate(Request $request, $id){
        $eventSchedule = event_schedule::find($id);

        $eventSchedule->title=$request->input('title');
        $eventSchedule->start_time=$request->input('stime');
        $eventSchedule->end_time=$request->input('etime');
        $eventSchedule->status=$request->input('status');

        $eventSchedule->save();

        return Redirect::to('/admin/eventSchedule')->with('success','Event Scheduled Updated Successfully..!');

    }

    public function sdestroy($id){
        $eventSchedule = event_schedule::find($id);

        $eventSchedule->delete();
        return Redirect::to('/admin/eventSchedule')->with('success','Deleted Successfully...!');
    }
}
