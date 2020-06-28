<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EditCommittee extends Edit
{

    public function render()
    {
        return view('livewire.edit-committee');

    }
    public function mount($committee)
    {
        $this->data= $committee->users()->get();

    }

}
