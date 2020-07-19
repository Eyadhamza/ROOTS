<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Taask extends Component
{
    public $taask;

    public $done;
    public function render()
    {
        return view('livewire.taask');
    }
    public function mount(\App\Taask $taask)
    {
        $this->taask=$taask;

        $this->done=$taask->done;
    }
    public function update()
    {
        $data1=$this->validate(['done'=>'boolean']);
        $this->taask->update($data1);

    }
}
