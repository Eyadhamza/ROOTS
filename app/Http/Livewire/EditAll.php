<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;

class EditAll  extends Edit
{
    use \Livewire\WithPagination;


    public function render()
{
    $users=User::paginate(10);
    return view('livewire.edit-all',compact('users'));
}
}
