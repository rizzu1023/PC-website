<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\workshops_info;

class Workshopinfo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $workshops_info = workshops_info::latest()->paginate(5);
        return view('workshopsinfo.index', compact('workshops_info'))
                  ->with('i', (request()->input('page',1) -1)*5);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()    
    {
        return view('workshopsinfo.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $rules = array(
        //     'workshop_id'       => 'required',
        //     'duration'      => 'required',
        //     'workshop_date' => 'required',
        //     'workshop_time' => 'required',
        //     'location'      => 'required',
        //     'fees'      => 'required',
       // );

        //     $validatedData=$request->validate([

        //         'workshop_id'       => 'required|numeric',
        //      'duration'      => 'required',
        //      'workshop_date' => 'required',
        //      'workshop_time' => 'required',
        //      'location'      => 'required',
        //      'fees'      => 'required|numeric',
             
        // ]);


            

         $workshopinfo = new workshopinfo;
            $workshopinfo->workshop_id       =  $request->input('workshop_id');
            $workshopinfo->duration      =  $request->input('duration');
            $workshopinfo->workshop_date= $request->input('workshop_date');
            $workshopinfo->workshop_time = $request->input('workshop_time');
            $workshopinfo->location = $request->input('location');
            
            $workshopinfo->fees= $request->input('fees');
            $workshopinfo->notes= $request->input('notes');
            $workshopinfo->save();

        
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $workshop_info = workshops_info::find($id);

        // show the view and pass the nerd to it
         dd($workshop_info->duration);
        return view('workshopsinfo.show')
            ->with('workshop', $workshop_info);
   
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
    public function destroy($id)
    {
        $workshopinfo= workshops_info::find($id);
        $workshopinfo->delete();
        return redirect()->route('workshopinfo.index')
                        ->with('success', 'workshopinfo  entry deleted successfully');
    }
}