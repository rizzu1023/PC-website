<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    // public function __construct()
    // {
    //     $this->middleware(['auth','admin']);
    // }
    

    public function index()
    {
        return view('/home');
    }

    public function getHome()
    {
        return Redirect::to('/admin/dashboard');
    }


    public function admin()
    {
        return view('adminpanel.events.add');
    }


}
