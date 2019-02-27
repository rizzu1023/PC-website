<?php
    namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\adminauth;
use App\admin;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\Admins;


class AdminController extends Controller
{

    public function Index(){
        return view('admin.dashboard');
    }

   public function login(Request $request)
    {

       $email=$request->input('email');
       $password=$request->input('password');
       $admins=DB::table('admins')->where('email','=',$email)->first();
       $admins=DB::table('admins')->where('password','=',$password)->first();

     
        return redirect('admin/dashboard');
             

    }

        public function AdminLogin()
    {
        return view('admin/adminlogin');
    }
    
    public function AdminRegister()
    {
    	
        return view('admin/adminregister');
    }

      public function Insert(Request $req,Response $res)
    {
    	$admin = new admin();

       $admin->name=$req->input('name');
       $admin->email=$req->input('email');
       $admin->password=$req->input('password');
       $admin->save();
       //return Redirect::route('admin/adminlogin');
       return Redirect::to('admin/adminlogin');

    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('admin/dashboard');
      }


}




