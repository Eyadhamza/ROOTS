<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function show(User $user)
    {

       return view('profile.show',compact('user'));
    }
    public function edit(User $user)
    {
        return view('profile.edit',compact('user'));
    }
    public function update(User $user)
    {
        $data=\request()->validate([
            'name'=>'required', 'string', 'max:255',
            'username'=>'required', 'string', 'max:255',
            'bio'=>'nullable',
            'avatar'=>'file',
            'email'=>'required', 'string', 'email', 'max:255', 'unique:users',
            'password'=>'required', 'string', 'min:8', 'confirmed'
        ]);
        if (\request('avatar'))
        {
            $data['avatar']=request('avatar')->store('/images','public');

        }

        $user->update($data);
        return redirect('/profile/'.$user->id);
    }
    public function index()
    {
        $users= User::all();
        return view('profile.indexx',compact('users'));
    }
    public function duty(User $user)
    {
        return view('profile.duty',compact('user'));
    }
}
