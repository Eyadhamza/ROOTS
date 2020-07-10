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
        if ($value)
        {
            return asset('storage/' . $value);

        }
        else
        {
            return asset('storage/' . 'images/default_achievement.png');
        }
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
