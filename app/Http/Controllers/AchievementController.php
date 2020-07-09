<?php

namespace App\Http\Controllers;

use App\Achievement;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    public function index()
    {
        $achievements=Achievement::paginate(10);
        return view('achievements.indexx',compact('achievements'));
    }

    public function create()
    {
        return view('achievements.create');
    }
    public function show(Achievement $achievement)
    {
        return view('achievements.show',compact('achievement'));
    }
    public function store(Request $request)
    {


        $attributes=request()->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'nullable|image',
            'committee'=>'required'
        ]);
        $imagepath=null;
        if (\request('image'))
        {
            $imagepath =request('image')->store('/images','public');

        }
        $achievement= Achievement::create([
            'user_id'=>auth()->user()->id,

            'description'=>$attributes['description'],
            'image'=>$imagepath,
            'title'=>$attributes['title'],
        ]);
        $achievement->committee()->associate($attributes['committee']);



        return redirect('/achievements');

    }

}
