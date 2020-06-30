<?php

namespace App\Http\Livewire;

use App\Committee;
use Livewire\Component;

class SearchCommittee extends Component
{
    public $search = '';
    public $committees = '';

    public function mount()
    {
        $this->search='';
        $this->committees=[];
    }
    public function input_reset()
    {
        $this->reset();
    }

    public function getUpdatesQueryString()
    {
        $this->committees= Committee::where('name','like','%'. $this->search . '%')
            ->get();
    }


    public function render()
    {
        return view('livewire.search-committee');
    }


}
