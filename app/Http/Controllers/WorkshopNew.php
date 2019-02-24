<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\workshops_info;
use App\workshops_participant;
use Redirect;

class WorkshopNew extends Controller
{
     public function index()
    {
          $workshops_info = workshops_info::latest()->paginate(5);
        return view('workshopsinfo.index', compact('workshops_info'))
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

            return Redirect::to('/Workshopnew');

        
    }
    public function show()
    {
             $workshop_info= workshops_info::all()->first();
    return view('workshopsinfo.show')->with('workshop_info', $workshop_info);

        // show the view and pass the nerd to it
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $workshopinfo = workshops_info::find($id);
        return view('workshopsinfo.edit', compact('workshopinfo'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $workshopinfo= workshops_info::find($id);
      $workshopinfo->workshop_id = $request->get('workshop_id');
      $workshopinfo->duration= $request->get('duration');
      $workshopinfo->workshop_date=$request->get('workshop_date');
      $workshopinfo->workshop_time=$request->get('workshop_time');
      $workshopinfo->location=$request->get('location');
      $workshopinfo->fees=$request->get('fees');
      $workshopinfo->save();
      return redirect()->route('workshopinfo.index')
                      ->with('success', 'workshopinfo updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $workshopinfo= workshops_info::find($id);
        $workshopinfo->delete();
        return redirect()->route('workshopinfo.index')
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

            return Redirect::to('/Workshopsparticipants');

        
    }
    public function userdetails()
    {
             $workshop_info= workshops_info::all()->first();
    return view('workshopsinfo.show')->with('workshop_info', $workshop_info);

        // show the view and pass the nerd to it
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
return      Redirect::to('/Workshopsparticipants')
                      ->with('success', 'workshop Participant updated successfully');
    
    }

    public function deleteparticipant($id)
    {
        $workshopparticipant= workshops_participant::find($id);
        $workshopparticipant->delete();
        return Redirect::to('/Workshopsparticipants')
                        ->with('success', 'workshop participant  entry deleted successfully');
    }






}
