<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded=[];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function committee()
    {
        return $this->belongsTo(Committee::class);
    }
}
