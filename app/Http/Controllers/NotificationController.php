<?php

namespace App\Http\Controllers;

use App\Notifications\user;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function create()
    {
        return view('notifications.create');
    }
    //the function notifies the user specified
    public function store()
    {
        $data=request()->validate([
            'task'=>'required'
        ]);
        foreach (auth()->user()->committees as $committee)
            $committee->users->each(function ($user) use ($data){
                $user->notify(new user(\request($data['task'])));
            });

        return redirect('/notifications');
    }
}
