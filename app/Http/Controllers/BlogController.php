<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog;
use Redirect;

class BlogController extends Controller
{

	public function index()
    {
          $blogs= blog::latest()->paginate(5);
        return view('adminpanel.blog.index', compact('blogs'))
                  ->with('i', (request()->input('page',1) -1)*5);
    
    }

     public function create()    
    {
        return view('adminpanel.blog.add');
    }

     public function store(Request $request)
    {

         $blog = new blog;
            
            $blog->title= $request->input('title');
            $blog->desc= $request->input('desc');
            $blog->body= $request->input('body');
            $blog->image= $request->input('img');
            
             $blog->save();

            return Redirect::to('/admin/blog');

        
    }

     public function edit($id)
    {
          $blog= blog::find($id);
        return view('adminpanel.blog.edit',compact('blog','{{$blog->id}}'));

    }

    public function update(Request $request, $id)
    {
      $blog= blog::find($id);
	  $blog->title= $request->input('title');
      $blog->desc=$request->input('desc');
      $blog->body=$request->input('body');
      $blog->image=$request->input('img');
      $blog->save();
      return Redirect::to('/admin/blog')->with('success', 'Blog entry updated successfully');
    
    }

     public function show()
    {
    	 $blog= blog::all()->first();
    return view('adminpanel.blog.show')->with('blog', $blog);


     
       
    }

    public function delete($id)
    {
    	 $blog=blog::find($id);
    	 $blog->delete();
        return Redirect::to('/admin/blog')->with('success', 'Blog deleted successfully');
    
   
    }



   

    
}
