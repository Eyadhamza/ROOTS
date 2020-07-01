<?php

namespace App\Http\Livewire;

use App\User;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Notifications extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.notifications', [
            'notifications' => Auth::user()->notifications()->latest()->paginate(5),
        ]);
    }

}
