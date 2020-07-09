<?php

namespace App\Http\Livewire;

use App\Committee;
use App\Role;
use App\User;
use Livewire\Component;

class EditAll  extends Edit
{
    use \Livewire\WithPagination;


    public function mount()
    {

    }
    public function render()
    {
    $users=User::paginate(10);
        $committees=$this->committees=Committee::all();
    $roles= $this->roles=Role::all();
    return view('livewire.edit-all',compact('users','committees','roles'));
    }
}
