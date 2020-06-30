<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    protected $guarded=[];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
    public function track()
    {
        return $this->belongsTo(Track::class);
    }
    public function getImageAttribute($value)
    {

        return "storage/". $value;
    }

}
