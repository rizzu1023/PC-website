<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\event_participants;


class mobileController extends Controller
{
    //

    public function Insert(Request $request,Response $response){    
        $insert = event_particpants::create($request->all);
        return response()->json($eventparticipant,200);
    }

    public function fetch(Request $request,Response $response){
        $store = event_particpants::all();
        return response()->json($store,200); 
    }
}
