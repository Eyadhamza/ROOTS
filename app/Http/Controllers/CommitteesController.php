<?php

namespace App\Http\Controllers;

use App\Committee;
use Illuminate\Http\Request;

class CommitteesController extends Controller
{
    public function show(Committee $committee)
    {


        return view('committees.show',compact('committee'));
    }
}
