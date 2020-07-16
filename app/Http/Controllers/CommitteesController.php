<?php

namespace App\Http\Controllers;

use App\CheckList;
use App\Committee;
use Illuminate\Http\Request;

class CommitteesController extends Controller
{
    public function show(Committee $committee)
    {


        return view('committees.show',compact('committee'));
    }
    public function edit(Committee $committee)
    {
       $checklist= CheckList::firstOrCreate([
            'name'=>$committee->name,
            'committee_id'=>$committee->id
        ]);
       $committee->checklist()->associate($checklist)->save();
       $checklist=$committee->checklist;
       return view('committees.edit',compact('committee','checklist'));
    }
}
