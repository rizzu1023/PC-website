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
    public function index()
    {
    	$workshops = Workshop::all();
    	// // dd($workshops);
        
        $data = [
        	'workshops' => $workshops
        ];
        // dd($data);
        return view('admin.workshop')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.workshop_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $workshop = new Workshop();
        
        $this->validate($request, [
            'title' => 'required|unique:workshops',
            'about_worjshop' => 'required',
            'duration' => 'required',
            'date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'fee' => 'required',
            'banner_image' => 'required|mimes:jpg,jpeg,png'
        ]);
        
        $slug = str_slug($request->title, "-");

        $workshop->title = $request->title;
        $workshop->slug = $slug;
        $workshop->about_worjshop = $request->about_worjshop;
        $workshop->duration = $request->duration;
        $workshop->date = $request->date;
        $workshop->start_time = $request->start_time;
        $workshop->end_time = $request->end_time;
        $workshop->fee = $request->fee;
        $workshop->status = 'active';

        if($request->hasFile('banner_image')) {
            $file = Input::file('banner_image');
            //getting timestamp
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            $name = $timestamp. '-' .$file->getClientOriginalName();
            $workshop->banner_image = $name;
            $file->move(public_path().'/frontend/images/workshop/', $name);
            Session::flash('success','Workshop Added Successfully');
            $workshop->save();
        }
        else
        {
            Session::flash('error','Banner Image Required');
            return redirect()->back()->withInput();
        }

        return redirect()->route('workshops');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $workshop = Workshop::find($id);
        if(!$workshop)
        {
            Session::flash('error','Workshop Not Found');
            return redirect()->back();
        }
        $data = [
            'workshop' => $workshop
        ];
        return view('admin.workshop_form')->with($data);
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
    
        $workshop = Workshop::find($id);
        if(!$workshop)
        {
            Session::flash('error','Workshop Not Found');
            return redirect()->back();
        }

        $validation_rules = [
            'about_worjshop' => 'required',
            'duration' => 'required',
            'date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'fee' => 'required',
        ];

        //if title change then check for uniqueness
        if($request->title != $workshop->title)
            $validation_rules['title'] = 'required|unique:workshops';
        else
            $validation_rules['title'] = 'required';

        //check format if new image is being uploaded
        if($request->banner_image!='')
            $validation_rules['banner_image'] = 'required|mimes:jpeg,jpg,png';

        $this->validate($request, $validation_rules);

        $slug = str_slug($request->title, "-");

        $workshop->title = $request->title;
        $workshop->slug = $slug;
        $workshop->about_worjshop = $request->about_worjshop;
        $workshop->duration = $request->duration;
        $workshop->date = $request->date;
        $workshop->start_time = $request->start_time;
        $workshop->end_time = $request->end_time;
        $workshop->fee = $request->fee;

        if($request->hasFile('banner_image')) {
            $file = Input::file('banner_image');
            //getting timestamp
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            $name = $timestamp. '-' .$file->getClientOriginalName();
            $workshop->banner_image = $name;
            $file->move(public_path().'/frontend/images/workshop/', $name);
        }
        
        $workshop->save();
        Session::flash('success','Workshop Added Successfully');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $workshop = Workshop::find($id);
        if($workshop)
        {
            $title = $workshop->title;
            $workshop->delete();
            Session::flash('success',$title.' Delete Successfully');
        }
        else
        {
            Session::flash('error','Workshop Not Found');
        }
        
        return redirect()->route('workshops');
    }

    public function enable($id)
    {
        $result = DB::table('workshops')
            ->where('id', $id)
            ->update(['status' => 'active']);

        if($result)
            Session::flash('success','Workshop Enabled Successfully');
        else
            Session::flash('error','Something Went Wrong!! Please Try Again');
        
        return redirect()->route('workshops');
    }

    public function disable($id)
    {

        $result = DB::table('workshops')
            ->where('id', $id)
            ->update(['status' => 'inactive']);

        if($result)
            Session::flash('success','Workshop Disabled Successfully');
        else
            Session::flash('error','Something Went Wrong!! Please Try Again');
        
        return redirect()->route('workshops');
    }
}
