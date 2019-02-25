<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Workshops;
use Redirect;

class WorkshopController extends Controller
{
     public function index()
    {
          $workshop= Workshops::latest()->paginate(5);
        return view('adminpanel.workshop.index', compact('workshop'))
                  ->with('i', (request()->input('page',1) -1)*5);
    
    }

    public function create()
        {
            return view('adminpanel.workshop.add');
        }

    public function store(Request $request)
    {

         $workshop = new Workshops;
            
            $workshop->title=  $request->input('title');
            $workshop->banner_image= $request->input('bannerimage');
            $workshop->about= $request->input('about');
            $workshop->status = $request->input('status');
            $workshop->save();

            return Redirect::to('/Workshops');

        
    }
    public function show()
    {
             $workshop= Workshops::all()->first();
    return view('adminpanel.workshop.show')->with('workshop', $workshop);

        // show the view and pass the nerd to it
       
    }

    public function edit($id)
    {
          $workshop= Workshops::find($id);
        return view('adminpanel.workshop.edit', compact('workshop'));

    }

    public function update(Request $request, $id)
    {
          $workshop= Workshops::find($id);
      $workshop->title= $request->input('title');
      $workshop->banner_image= $request->input('bannerimage');
      $workshop->about=$request->input('about');
      $workshop->status=$request->input('status');
      $workshop->save();
      return Redirect::to('Workshops')
                      ->with('success', 'workshop updated successfully');
    
    }

    public function delete($id)
    {
        $workshop= Workshops::find($id);
        $workshop->delete();
        return Redirect::to('Workshops')
                        ->with('success', 'workshop  entry deleted successfully');
    }

    
   
}
