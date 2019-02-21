<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Workshop;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class WorkshopController extends Controller
{
    
    public function getWorkshop(){
        return view('admin.workshop');
    }
    public function postWorkshop(Request $request){

        $workshop = new Workshop;
        $workshop->workshop_id= $request->workshop_id;
        $workshop->title= $request->title;
        $workshop->image= $request->image;
        $workshop->description= $request->description;
        $workshop->date= $request->date;
        $workshop->time= $request->time;
        $workshop->save();
        return Redirect::route(admin.workshop)->with('success','Workshop Added successfully');
    }
}
    