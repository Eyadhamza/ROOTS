<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    protected $guarded=[];
    public function getImageAttribute($value)
    {
        if ($value)
        {
            return asset('storage/' . $value);

        }
        else
        {
            return asset('storage/' . 'images/default_track.png');
        }
    }
    public function committees()
    {
        return $this->hasMany(Committee::class);
    }
}
