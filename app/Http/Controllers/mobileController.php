<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\event_participants;


class mobileController extends Controller
{
    //

    public function Insert(Request $request,Response $response){    
        event_particpants::create($request->all);
        return response()->json($eventparticipant,200);
    }
}
