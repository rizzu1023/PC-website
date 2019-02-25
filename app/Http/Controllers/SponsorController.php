<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\sponsorship;
use Redirect;
class SponsorController extends Controller
{
     public function index()
    {
          $sponsors= sponsorship::latest()->paginate(5);
        return view('adminpanel.sponsors.index', compact('sponsors'))
                  ->with('i', (request()->input('page',1) -1)*5);
    
    }

    	public function create()
        {
            return view('adminpanel.sponsors.add');
        }


    public function store(Request $request)
    {

         $sponsor = new sponsorship;
            $sponsor->company_name=  $request->input('companyname');
            $sponsor->company_logo= $request->input('companylogo');
            $sponsor->save();
			return Redirect::to('/sponsors');

        
    }

    public function edit($id)
    {
          $sponsor = sponsorship::find($id);
        return view('adminpanel.sponsors.edit', compact('sponsor'));

    }

    public function update(Request $request, $id)
    {
          $sponsor= sponsorship::find($id);
            $sponsor->company_name=  $request->input('companyname');
            $sponsor->company_logo= $request->input('companylogo');
            
            $sponsor->save();
             return Redirect::to('/sponsors')
                      ->with('success', 'Sponsors updated successfully');
    
    }


 public function delete($id)
    {
        $sponsor= sponsorship::find($id);
        $sponsor->delete();
        return Redirect::to('/sponsors')
                        ->with('success', 'Sponsors entry deleted successfully');
    }


    

   
}
