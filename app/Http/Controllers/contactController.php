<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact_us;
use Redirect;
use App\about_us;

class contactController extends Controller
{
    public function index(){

        $contact_us = contact_us::latest()->paginate(5);
        return view('adminpanel.contact.index',compact('contact_us'))->with('i',(request()->input('page',1)-1)*5);
    }

    public function create(){
        return view('adminpanel.contact.add');
    }

    public function store(Request $request){
        $contact =  new contact_us;

        $contact->name=$request->input('name');
        $contact->contact=$request->input('contact');
        $contact->save();

        return Redirect::to('/contact')->with('successs','Contact added successfully..!');
    }

    public function edit($id){
        $contact = contact_us::find($id);
        return view('adminpanel.contact.edit')->with('contact',$contact);
    }

    public function update(Request $request,$id){
        $contact = contact_us::find($id);

        $contact->name=$request->input('name');
        $contact->contact=$request->input('contact');
        $contact->save();

        return Redirect::to('/contact')->with('successs','Contact added successfully..!');

    }

    public function destroy($id){

        $contact = contact_us::find($id);

        $contact->delete();
        return Redirect::to('/contact')->with('success','Deleted Successfully...!');
    }

   // About US Controller function

    public function aindex(){
        $about_us = about_us::latest()->paginate(5);
        return view('adminpanel.about.aindex',compact('about_us'))->with('i',(request()->input('page',1)-1)*5);
    }

    public function acreate(){
        return view('about.aadd');
    }

    public function astore(Request $request){
        $about = new about_us;

        $about->pc_detail=$request->input('pcDetail');
        $about->save();

        return Redirect::to('/about')->with('success','About Pc Added successfully..!');
    }

    public function aedit($id){
        $about_us = about_us::find($id);
        return view('adminpanel.about.aedit',compact('about_us'));
    }

    public function aupdate(Request $request, $id){
        $about_us = about_us::find($id);

        $about_us->pc_detail=$request->input('pcDetail');

        $about_us->save();

        return Redirect::to('/about')->with('success','Updated About US Successfully....!');
      }

      public function adestroy($id){

        $about = about_us::find($id);

        $about->delete();
        return Redirect::to('/about')->with('success','Deleted Successfully..!');
      }
}
