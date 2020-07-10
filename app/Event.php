<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
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
            return asset('storage/' . 'images/default_event.png');
        }
    }
}
