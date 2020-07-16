<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CheckList extends Component
{
    //any property of those will be directly accesible to the view , which means i recive the request
    // through wire model
    public $checklist, $chat_followup,$task_followup,$problem_followup,$activity_followup ,$interaction_followup;
    public function mount(\App\CheckList $checklist)
    {
        $this->checklist=$checklist;
        $this->chat_followup=$checklist->chat_followup;
        $this->task_followup=$checklist->task_followup;
        $this->problem_followup=$checklist->problem_followup;
        $this->activity_followup=$checklist->activity_followup;
        $this->interaction_followup=$checklist->interaction_followup;

    }
    public function render()
    {
        return view('livewire.check-list');
    }
    public function update()
    {
       $data= $this->validate([
            'task_followup'=>'boolean|nullable',
            'chat_followup'=>'boolean|nullable',
            'problem_followup'=>'boolean|nullable',
            'activity_followup'=>'boolean|nullable',
            'interaction_followup'=>'boolean|nullable',

        ]);
        $this->checklist->update($data);
        session()->flash('message', 'List successfully updated');

    }
}
