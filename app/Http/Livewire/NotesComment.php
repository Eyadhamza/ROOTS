<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NotesComment extends Component
{
    public $checklist,$comments,$body;

    public function mount(\App\CheckList $checklist)
    {
        $this->checklist = $checklist;
        $this->comments = $this->checklist->comments;
    }
    public function submit()
    {
        $this->validate([
            'body' => 'required'
        ]);
// Execution doesn't reach here if validation fails.

        $comment = \App\Comment::create([
            'body' => $this->body,
            'user_id' => auth()->user()->id,
            'checklist_id' => $this->checklist->id
        ]);
        $this->comments->push($comment);
        session()->flash('message', 'Comment Successfully Added.');

    }

    public function render()
    {
        return view('livewire.notes-comment');
    }
}
