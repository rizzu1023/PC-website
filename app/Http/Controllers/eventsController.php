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

    
}
