<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(User $user)
    {

       return view('profile.show',compact('user'));
    }
    public function edit(User $user)
    {
        return view('profile.edit',compact('user'));
    }
    public function index()
    {
        $users= User::all();
        return view('profile.indexx',compact('users'));
    }
}
