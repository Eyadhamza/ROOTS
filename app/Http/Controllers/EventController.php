<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function create()
    {
        return view('events.create');
    }
    public function store(Request $request)
    {


        $attributes=request()->validate([
            'description'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name'=>'required',
            'embedVideo'=>'required'
        ]);
        $imagepath=null;
        if (\request('image'))
        {
            $imagepath =request('image')->store('/images','public');

        }
        $track= Event::create([
            'description'=>$attributes['description'],
            'image'=>$imagepath,
            'name'=>$attributes['name'],
            'embedVideo'=>$attributes['embedVideo']
        ]);



        return redirect('/events');

    }
    public function show(Event $track)
    {
        return view('events.show',compact('event'));
    }
    public function index()
    {
        $events=Event::all();
        return view('events.indexx',compact('events'));
    }
}
