<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\event_participants;
use App\User;


class mobileController extends Controller
{
    //

    public function Insert(Request $request,Response $response){
        $user = new User;
        $eventparticipant = new event_participants;
        $eventparticipant->save();
        $user->save();
        return response()->json($user,$eventparticipant,200);
    }
}
