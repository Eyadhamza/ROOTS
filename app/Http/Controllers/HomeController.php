<?php

namespace App\Http\Controllers;

use App\Event;
use App\Track;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tracks= Track::all();


        return view('home',compact('tracks'));
    }
}
