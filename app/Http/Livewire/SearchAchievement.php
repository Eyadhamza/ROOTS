<?php

namespace App\Http\Livewire;

use App\Achievement;
use Livewire\Component;

class SearchAchievement extends Component
{
    public $search = '';
    public $achievements = '';

    public function mount()
    {
        $this->search='';
        $this->achievements=[];
    }
    public function input_reset()
    {
        $this->reset();
    }

    public function getUpdatesQueryString()
    {
        $this->achievements= Achievement::where('title','like','%'. $this->search . '%')
            ->get();
    }

    public function render()
    {
        return view('livewire.search-achievement');
    }
}
