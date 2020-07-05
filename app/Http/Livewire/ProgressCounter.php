<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;

class ProgressCounter extends Component
{
    public $user, $selected_id ,$tasks_performance ,$interaction_performance , $knowledge_performance , $updateMode;


    public function render()
    {
        return view('livewire.progress-counter');
    }
    public function mount(User $user)
    {
        $this->user=$user;
        $this->tasks_performance=$user->tasks_performance;
        $this->interaction_performance=$user->interaction_performance;
        $this->knowledge_performance=$user->knowledge_performance;
    }

    public function update()
    {
         $this->user->update([
                'tasks_performance' => $this->tasks_performance,
                'interaction_performance'=>$this->interaction_performance,
                'knowledge_performance'=>$this->knowledge_performance,

          ]);
        session()->flash('message', 'Performance Successfully Updated.');
    }

    public function Performance()
    {
        if ($this->updateMode==false)
        {
            $this->updateMode=true;

        }
        else
        {
            $this->updateMode=false;
        }
    }

    public function increament_tasks_performance()
    {
        $this->tasks_performance+=1;
    }

    public function decreament_tasks_performance()
    {
        if($this->tasks_performance>0)
        {
            $this->tasks_performance -=1 ;
        }
        else
        {
            session()->flash('info', "You cannot have negative value in counter");
        }
    }
    public function increament_interaction_performance()
    {
        $this->interaction_performance+=1;
    }

    public function decreament_interaction_performance()
    {
        if($this->interaction_performance>0)
        {
            $this->interaction_performance -=1 ;
        }
        else
        {
            session()->flash('info', "You cannot have negative value in counter");
        }
    }
    public function increament_knowledge_performance()
    {
        $this->knowledge_performance+=1;
    }

    public function decreament_knowledge_performance()
    {
        if($this->knowledge_performance>0)
        {
            $this->knowledge_performance -=1 ;
        }
        else
        {
            session()->flash('info', "You cannot have negative value in counter");
        }
    }
}
