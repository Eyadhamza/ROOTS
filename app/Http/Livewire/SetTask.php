<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SetTask extends Component
{
    public $taasks;
    public $name;
    public $done;
    public $checklist;

    public function mount(\App\Checklist $checklist)
    {
        $this->checklist=$checklist;
        $this->taasks=$checklist->taasks;
    }

    public function submit()
    {
        $taask = \App\Taask::firstOrCreate([
            'name' => $this->name,
            'checklist_id'=>$this->checklist->id,
            'done'=>'0'
        ]);

        $this->taasks->push($taask);
        session()->flash('message', 'Task Successfully Added.');
    }
    public function render()
    {
        $taasks=$this->taasks;
        return view('livewire.set-task',compact('taasks'));
    }
}
