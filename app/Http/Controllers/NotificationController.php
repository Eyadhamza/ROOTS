<?php

namespace App\Http\Controllers;

use App\Notifications\user;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function createTask()
    {
        return view('notifications.createTask');
    }
    public function createOneTask(\App\User $user2)
    {
        return view('notifications.createOneTask',compact('user2'));
    }
    //the function notifies the user specified
    public function storeTask()
    {
        $data1=request()->validate([
            'title'=>'required',
            'user_message'=>'required'
        ]);

        foreach (auth()->user()->committees as $committee)
            $committee->users->each(function ($user) use ($data1){
                $user->notify(new user( \request('title') ,\request('user_message')));
            });

        return redirect('/notifications');
    }
    public function storeOneTask(\App\User $user2)
    {
            request()->validate([
            'title'=>'required',
            'user_message'=>'required'
        ]);

        $user2->notify(new user(\request('title') ,\request('user_message')));

        return redirect('/notifications');
    }

}
