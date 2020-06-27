<?php

namespace App\Http\Livewire;

use App\Committee;
use Livewire\Component;
use App\User;

class CommitteeEdit extends Edit
{

    public function render()
    {
     return view('livewire.committee-edit');

    }
    public function mount($committee)
    {
       $this->data= $committee->users()->get();

    }

}
