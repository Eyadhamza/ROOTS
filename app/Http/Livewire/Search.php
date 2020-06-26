<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;

class Search extends Component
{
    public $search = '';
    public $users = '';

    public function mount()
    {
        $this->search='';
        $this->users=[];
    }
    public function input_reset()
    {
        $this->reset();
    }

    public function getUpdatesQueryString()
    {
        $this->users= User::where('name','like','%'. $this->search . '%')
            ->get();
    }


    public function render()
    {
        return view('livewire.search');
    }
}
