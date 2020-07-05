<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
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

    public function getImageAttribute($value)
    {

        return "storage/". $value;
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
