<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles=Article::paginate(10);
        return view('articles.indexx',compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
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
        $article= Article::create([
            'user_id'=>auth()->user()->id,
            'committee_id'=>'1',
            'description'=>$attributes['description'],
            'image'=>$imagepath,
            'title'=>$attributes['title'],
        ]);
            $article->committee()->associate($attributes['committee']);



        return redirect('/articles');

    }
    public function show(Article $article)
    {
        return view('articles.show',compact('article'));
    }
}
