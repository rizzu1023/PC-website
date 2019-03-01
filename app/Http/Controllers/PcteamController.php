<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\pc_team;
use Redirect;
class PcteamController extends Controller
{
    public function index(){

        $pcteam = pc_team::latest()->paginate(5);
        return view('adminpanel.pcteam.index',compact('pcteam'))->with('i',(request()->input('page',1)-1)*5);
    }

    public function add(){
        return view('adminpanel.pcteam.add');
    }

    public function store(Request $request){
        $pcteam =  new pc_team;

        $pcteam->member_name=$request->input('membername');
        $pcteam->member_img=$request->input('img');
        $pcteam->save();

        return Redirect::to('/admin/pcteam')->with('successs','Member added successfully..!');
    }

    public function edit($id){
        $pcteam= pc_team::find($id);
        return view('adminpanel.pcteam.edit')->with('pcteam',$pcteam);
    }

    public function update(Request $request,$id){
        $pcteam= pc_team::find($id);

        	 $pcteam->member_name=$request->input('membername');
        $pcteam->member_img=$request->input('img');
        $pcteam->save();

        return Redirect::to('/admin/pcteam')->with('successs','Member updates successfully..!');

    }

    public function destroy($id){

        $pcteam = pc_team::find($id);

        $pcteam->delete();
        return Redirect::to('/pcteam')->with('success','Deleted Successfully...!');
    }

}
