<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded=[];
    public function getImageAttribute($value)
    {

        return "storage/". $value;
    }
}
