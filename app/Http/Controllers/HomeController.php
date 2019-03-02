<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    // public function __construct()
    // {
    //     $this->middleware(['auth','admin']);
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('/home');
    }

    public function admin(){
        return view('admin.dashboard');
    }

    // public function feedback()
    // {
    //     return view('frontend.feedback');
    // }

    public function getHome(){
        return view('pc.index');
    }

    public function getEvent(){
        return view('pc.event');
    }

    public function getAbout(){
        return view('pc.about');
    }

    public function getBlog(){
        return view('pc.blog');
    }

    public function getContact(){
        return view('pc.contact');
    }

    public function getRegister(){
        return view('pc.register');
    }



}
