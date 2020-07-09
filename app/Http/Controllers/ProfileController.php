<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

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
            'telegram_url'=>'nullable',
            'avatar'=>'file|image',
            'email'=>'required', 'string', 'email', 'max:255', 'unique:users',
            'phone'=>'required', 'string', 'max:255',
        ]);
        if (\request('avatar'))
        {
            $data['avatar']=request('avatar')->store('/images','public');

        }

        $user->save();
        $user->update($data,[
            'password'=> $user->password=bcrypt(\request('password'))
        ]);
        dd($user);
        return redirect('/profile/'.$user->id)->with('success','Your Info was Updated successfully');
    }
    public function index()
    {
        $users= User::paginate(5);
        return view('profile.indexx',compact('users'));
    }
    public function duty(User $user)
    {

        $RRusers=[];
        foreach (Role::all() as $role)
            if ($role->name == 'RR')
            {
                $RRusers= $role->users;

            }
        return view('profile.duty',compact('user','RRusers'));
    }


}
