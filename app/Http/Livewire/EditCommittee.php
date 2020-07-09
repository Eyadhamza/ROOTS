<?php

namespace App\Http\Livewire;

use App\Committee;
use App\Role;
use Livewire\Component;

class EditCommittee extends Edit
{

    public function render()
    {
       $committees= $this->committees=Committee::all();
       $roles= $this->roles=Role::all();
        return view('livewire.edit-committee',compact('committees','roles'));

    }
    public function mount($committee)
    {

        $this->data= $committee->users()->get();

    }

}
