<?php

namespace App\Http\Livewire;

use App\Article;
use Livewire\Component;

class SearchArticle extends Component
{
    public $search = '';
    public $articles = '';

    public function mount()
    {
        $this->search='';
        $this->articles=[];
    }
    public function input_reset()
    {
        $this->reset();
    }

    public function getUpdatesQueryString()
    {
        $this->articles= Article::where('title','like','%'. $this->search . '%')
            ->get();
    }
    public function render()
    {
        return view('livewire.search-article');
    }
}
