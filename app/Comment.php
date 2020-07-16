<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded=[];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function achievement()
    {
        return $this->belongsTo(Article::class);
    }
    public function checklist()
    {
        return $this->belongsTo(CheckList::class);
    }

    //

}
