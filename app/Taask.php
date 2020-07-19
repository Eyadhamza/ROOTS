<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taask extends Model
{
    protected $guarded=[];
    public function checklist()
    {
        return $this->belongsTo(Checklist::class);
    }
}
