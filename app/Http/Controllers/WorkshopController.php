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

    public function participantsindex()
    {
        $workshop_participants = workshops::latest()->paginate(5);
        return view('workshop.index', compact('workshops'))
                  ->with('i', (request()->input('page',1) -1)*5);
    
       
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('workshop.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'workshop_id'       => 'required',
            'title'      => 'required',
            'banner_image' => 'required',
            'about' => 'required'
        );
        //$validator = Validator::make(Input::all(), $rules);

        // process the login
        // if ($validator->fails()) {
        //     return Redirect::to('workshop/create')
        //         ->withErrors($validator)
        //         ->withInput(Input::except('password'));
        // } else {
        //     // store
            $workshop = new workshops;
            $workshop->workshop_id       =  $request->input('workshop_id');
            $workshop->title      =  $request->input('title');
            $workshop->banner_image = $request->input('banner_image');
            $workshop->about = $request->input('about');
            $workshop->save();

            // redirect
    
           // return Redirect::to('workshop/index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
                // get the nerd
        $workshop = workshops::find($id);

        // show the view and pass the nerd to it
        return view('workshop.show')
            ->with('workshop', $workshop);
   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
                $workshop = workshops::find($id);
        return view('workshop.edit', compact('workshop'));

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
        
      $workshop= workshops::find($id);
      $workshop->workshop_id = $request->get('workshop_id');
      $workshop->title= $request->get('title');
      $workshop->banner_image=$request->get('banner_image');
      $workshop->about=$request->get('about');
      $workshop->save();
      return redirect()->route('workshop.index')
                      ->with('success', 'workshop updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $workshop= workshops::find($id);
        $workshop->delete();
        return redirect()->route('workshop.index')
                        ->with('success', 'workshop entry deleted successfully');
    

    }
}
    
