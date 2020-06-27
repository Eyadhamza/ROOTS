<?php

namespace App\Http\Livewire;

use App\Committee;
use Livewire\Component;
use App\User;
use Livewire\WithPagination;

//this one to edit all members in a specific  committee
class AllUsersEdit extends Edit
{
    use WithPagination;


    public function render()
    {
        $users=User::paginate(10);
        return view('livewire.all-users-edit',compact('users'));
    }


}
