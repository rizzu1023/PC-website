<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\event;
use Redirect;

class eventsController extends Controller
{
    public function index(){

        $event = event::latest()->paginate(5);
        return view('events.index', compact ('event'))->with('i',(request()->input('page',1)-1)*5);
    }

    public function create(){
        return view('events.add');
    }

    public function store(Request $request){
        $event = new event;

        $event->event_name=$request->input('name');
        $event->tagline=$request->input('tagline');
        $event->about_event=$request->input('about');
        $event->event_theme=$request->input('theme');
        $event->keypoints=$request->input('keypoints');
        $event->status=$request->input('status');
        
        $event->save();

        return Redirect::to('/events')->with('message','Event has succesfully added..!');

    }
}
