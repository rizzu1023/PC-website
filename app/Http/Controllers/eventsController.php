<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\event;
use Redirect;

class eventsController extends Controller
{
    public function index(){

        $event = event::latest()->paginate(5);
        return view('adminpanel.events.index', compact ('event'))->with('i',(request()->input('page',1)-1)*5);
    }

    public function create(){
        return view('adminpanel.events.add');
    }

    public function store(Request $request){
        $event = new event;

        $event->event_name=$request->input('name');
        $event->tagline=$request->input('tagline');
        $event->banner_image=$request->input('banner');
        $event->about_event=$request->input('about');
        $event->event_theme=$request->input('theme');
        $event->keypoints=$request->input('keypoints');
        $event->status=$request->input('status');
        
        $event->save();

        return Redirect::to('/admin/events')->with('success','Event has succesfully added..!');

    }

    public function edit($id){
        //dd($request->id);
        $event = event::find($id);
        return view('adminpanel.events.edit')->with('event',$event); 
    }

    public function update(Request $request,$id){

        $event = event::find($id);
        $event->event_name=$request->input('name');
        $event->tagline=$request->input('tagline');
        $event->about_event=$request->input('about');
        $event->event_theme=$request->input('theme');
        $event->keypoints=$request->input('keypoints');
        $event->status=$request->input('status');
        // dd($event);
        
        $event->save();

        return Redirect::to('/admin/events')->with('success','Event has succesfully updated..!');
    }

    public function destroy($id){

        $event = event::find($id);
        $event->delete();
        // dd($event);
        return Redirect::to('/admin/events')->with('success','Event Removed');
    }
}
