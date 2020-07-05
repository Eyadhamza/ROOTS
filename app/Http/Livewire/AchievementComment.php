<?php

namespace App\Http\Livewire;

use App\Achievement;
use Livewire\Component;

class AchievementComment extends Component
{
    public $body;
    public $achievement;
    public $comments;

    public $achievement_id;


    public function mount(Achievement $achievement)
    {
        $this->achievement = $achievement;
        $this->comments = $this->achievement->comments;
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
            'achievement_id' => $this->achievement->id
        ]);
        $this->comments->push($comment);
        session()->flash('message', 'Comment Successfully Added.');

    }

    public function render()
    {
        return view('livewire.comment');
    }
}
