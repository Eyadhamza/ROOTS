<?php

namespace App\Http\Livewire;

use App\Taask;
use Illuminate\Support\Facades\Request;
use Livewire\Component;
use function GuzzleHttp\Promise\task;

class CheckList extends Component
{
    //any property of those will be directly accesible to the view , which means i recive the request
    // through wire model
    public $taasks;
    public $name;
    public $checklist, $chat_followup,$task_followup,$problem_followup,$activity_followup ,$interaction_followup,$notes;
    public function mount(\App\CheckList $checklist,Taask $taask)
    {
        $this->checklist=$checklist;
        $this->taasks=$checklist->taasks;
        $this->name=$taask->name;
        $this->chat_followup=$checklist->chat_followup;
        $this->task_followup=$checklist->task_followup;
        $this->problem_followup=$checklist->problem_followup;
        $this->activity_followup=$checklist->activity_followup;
        $this->interaction_followup=$checklist->interaction_followup;

    }
    public function render()
    {
        $data= $this->validate([
            'task_followup'=>'boolean|nullable',
            'chat_followup'=>'boolean|nullable',
            'problem_followup'=>'boolean|nullable',
            'activity_followup'=>'boolean|nullable',
            'interaction_followup'=>'boolean|nullable',
            'notes'=>'nullable',

        ]);
        $this->checklist->update($data);
        $taasks=$this->taasks;

        return view('livewire.check-list',compact('taasks'));
    }


}
