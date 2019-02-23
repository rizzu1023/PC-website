<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\event_problem_definition;
use Redirect;

class eventsProbDefiController extends Controller
{
    public function index(){

        $eventsPdefinition = event_problem_definition::latest()->paginate();
        return view('eventsPdefinition.index',compact('eventsPdefinition'))->with('i',(request()->input('page',1)-1)*5);    
  
    }

    public function create(){
        return view('eventsPdefinition.add');
    }

    public function store(Request $request){
        $eventsPdefinition = new event_problem_definition;

        $eventsPdefinition->title=$request->input('title');
        $eventsPdefinition->description=$request->input('description');
        $eventsPdefinition->status=$request->input('status');

        $eventsPdefinition->save();

        return view('/eventsPdefinition')->with('message','Successfully Addes the problem Difinition..!');
    }

    public function edit(){
        $eventsPdefinition = event_problem_definition::find($id);
        return view('eventsPdefinition.edit')->with('eventsPdefinition',$eventsPdefinition);
    }

    public function update(Request $request,$id){

        $eventsPdefinition = event_problem_definition::find($id);

        $eventsPdefinition->title=$request->input('title');
        $eventsPdefinition->description=$request->input('description');
        $eventsPdefinition->status=$request->input('status');

        $eventsPdefinition->save();

        return Redirect::to('/eventsPdefinition')->with('message','Successfully Addes the problem Difinition..!');

    }

    public function destroy($id){

        $eventsPdefinition = event_problem_definition::find($id);
        
        $eventsPdefinition->delete();        

        return Redirect::to('/eventsPdefinition')->with('message','Problem Definition Deleted Successfully..!');
    }
}
