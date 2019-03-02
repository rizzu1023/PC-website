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


    public function Home()
    {
        return view('pc.index');
    }

    public function getEvent()
    {
        return view('pc.event');
    }

    public function getAbout()
    {
        return view('pc.about');
    }

    public function getRegister()
    {
        return view('pc.register');
    }

    public function getContact()
    {
        return view('pc.contact');
    }

    public function getBlog(){
        return view('pc.blog');
    }




}
