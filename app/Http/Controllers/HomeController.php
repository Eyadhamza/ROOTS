<?php

namespace App\Http\Controllers;

use App\Achievement;
use App\Article;
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
        $tracks= Track::latest()->take(10)->get();
        $events= Event::latest()->take(10)->get();
        $articles=Article::latest()->take(10)->get();
        $achievements=Achievement::latest()->take(10)->get();
        return view('Home.home',compact('tracks','events','achievements','articles'));
    }
}
