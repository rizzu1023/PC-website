<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact_us;
use Redirect;

class contactController extends Controller
{
    public function index(){

        $contact_us = contact_us::latest()->paginate(5);
        return view('contact.index',compact('contact_us'))->with('i',(request()->input('page',1)-1)*5);
    }

    public function create(){
        return view('contact.add');
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
        return view('contact.edit')->with('contact',$contact);
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
}
