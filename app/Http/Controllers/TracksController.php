<?php

namespace App\Http\Controllers;

use App\Track;
use Illuminate\Http\Request;

class TracksController extends Controller
{
    public function create()
    {
        return view('tracks.create');
    }
    public function store(Request $request)
    {


        $attributes=request()->validate([
            'description'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name'=>'required',
            'instructors'=>'required'
        ]);
        $imagepath=null;
        if (\request('image'))
        {
            $imagepath =request('image')->store('/images','public');

        }
        $track= Track::create([
            'description'=>$attributes['description'],
            'image'=>$imagepath,
            'name'=>$attributes['name'],
            'instructors'=>$attributes['instructors']
        ]);



        return redirect('/tracks');

    }
    public function show(Track $track)
    {
        return view('tracks.show',compact('track'));
    }
    public function index()
    {
        $tracks=Track::all();
        return view('tracks.index',compact('tracks'));
    }
}
