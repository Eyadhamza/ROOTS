<?php

namespace App\Http\Livewire;

use App\Article;
use Livewire\Component;

class Comment extends Component
{
    public $body;
    public $article;
    public $comments;

    public $article_id;


    public function mount(Article $article)
    {
        $this->article=$article;
        $this->comments=$this->article->comments;
    }
    public function submit()
    {
        $this->validate([
            'body'=>'required'
        ]);
        // Execution doesn't reach here if validation fails.

       $comment= \App\Comment::create([
            'body' => $this->body,
            'user_id' => auth()->user()->id,
            'article_id'=>$this->article->id
        ]);
        $this->comments->push($comment);
        session()->flash('message', 'Comment Successfully Added.');

    }
    public function render()
    {
        return view('livewire.comment');
    }

}
