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
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function getImageAttribute($value)
    {

        return "storage/". $value;
    }

}
