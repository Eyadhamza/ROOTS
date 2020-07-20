<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Taask extends Component
{
    public $taask;
    public $taasks;
    public $name;
    public $done;
    public $checklist;

    public function render()
    {
        $this->taask->update(['done'=>$this->done]);
        return view('livewire.taask');
    }
    public function mount(\App\Taask $taask)
    {
        $this->taask=$taask;
        $this->checklist=$taask->checklist;
        $this->done=$taask->done;
        $this->taasks=$this->checklist->taasks;
    }


}
