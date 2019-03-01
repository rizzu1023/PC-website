<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\workshops_info;
use App\User;
use App\workshops_participant;
use DB;
use Redirect;

class WorkshopNew extends Controller
{
     public function index()
    {
          $workshops_info = workshops_info::latest()->paginate(5);
        return view('adminpanel.workshopsinfo.index', compact('workshops_info'))
                  ->with('i', (request()->input('page',1) -1)*5);
    
    }
    public function create()
        {
            return view('adminpanel.workshopsinfo.add');
        }

    public function store(Request $request)
    {

         $workshopinfo = new workshops_info;
            
            $workshopinfo->duration      =  $request->input('duration');
            $workshopinfo->workshop_date= $request->input('workshopdate');
            $workshopinfo->workshop_time = $request->input('workshoptime');
            $workshopinfo->location = $request->input('location');
            
            $workshopinfo->fees= $request->input('fees');
            $workshopinfo->notes= $request->input('notes');
            $workshopinfo->save();

            return Redirect::to('/admin/Workshopnew');

        
    }
    public function show()
    {
             $workshop_info= workshops_info::all()->first();
    return view('adminpanel.workshopsinfo.show')->with('workshop_info', $workshop_info);

        // show the view and pass the nerd to it
       
    }

    public function edit($id)
    {
          $workshopinfo = workshops_info::find($id);
        return view('adminpanel.workshopsinfo.edit', compact('workshopinfo'));

    }

    public function update(Request $request, $id)
    {
          $workshopinfo= workshops_info::find($id);
      
      $workshopinfo->duration= $request->input('duration');
      $workshopinfo->workshop_date=$request->input('workshop_date');
      $workshopinfo->workshop_time=$request->input('workshop_time');
      $workshopinfo->location=$request->input('location');
      $workshopinfo->fees=$request->input('fees');
      $workshopinfo->notes=$request->input('notes');
      $workshopinfo->save();
      return Redirect::to('/admin/Workshopnew')
                      ->with('success', 'workshopinfo updated successfully');
    
    }

    public function delete($id)
    {
        $workshopinfo= workshops_info::find($id);
        $workshopinfo->delete();
        return Redirect::to('/admin/Workshopnew')
                        ->with('success', 'workshopinfo  entry deleted successfully');
    }

    //Workshop Participants
     public function home()
    {
          $workshopparticipant= workshops_participant::latest()->paginate(5);
        return view('adminpanel.workshopsparticipant.index', compact('workshopparticipant'))
                  ->with('i', (request()->input('page',1) -1)*5);
    
    }

    public function new()
        {
            return view('adminpanel.workshopsparticipant.add');
        }


    public function storeparticipants(Request $request)
    {

         $workshopparticipant = new workshops_participant;
            
            $workshopparticipant->workshop_name      =  $request->input('workshopname');
            $workshopparticipant->username= $request->input('username');
            $workshopparticipant->email= $request->input('email');
            $workshopparticipant->save();

            return Redirect::to('/admin/Workshopsparticipants');

        
    }
    public function userdetails($username)
    {
            
            
             $workshopparticipant= workshops_participant::all()->first();
             //dd($workshopparticipant->username);
             $users=DB::table('users')->where('username','=',$workshopparticipant->username)->first();
             //dd($user);
    return view('adminpanel.workshopsparticipant.show')->with('users', $users);

        
       
    }

     public function editparticipant($id)
    {
          $workshopparticipant = workshops_participant::find($id);
        return view('adminpanel.workshopsparticipant.edit', compact('workshopparticipant'));

    }

    public function updateparticipant(Request $request, $id)
    {
          $workshopparticipant= workshops_participant::find($id);
      $workshopparticipant->workshop_name      =  $request->input('workshopname');
            $workshopparticipant->username= $request->input('username');
            $workshopparticipant->email= $request->input('email');
            $workshopparticipant->save();
            return Redirect::to('/admin/Workshopsparticipants')
                      ->with('success', 'workshop Participant updated successfully');
    
    }

    public function deleteparticipant($id)
    {
        $workshopparticipant= workshops_participant::find($id);
        $workshopparticipant->delete();
        return Redirect::to('/admin/Workshopsparticipants')
                        ->with('success', 'workshop participant  entry deleted successfully');
    }






}
