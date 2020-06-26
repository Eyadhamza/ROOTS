<?php

namespace App\Http\Livewire;

use App\Committee;
use Livewire\Component;
use App\User;

class UserManagement extends Component
{
    public $data=[], $name, $phone, $email ,$password,$role, $selected_id;
    public $updateMode = false;

    public function render()
    {
        $committees=Committee::all();

        $committee_users=[];
        foreach ($committees as $committee)
        {
            $committee_name = $committee->name;
            $this->data = $committee->users ;
        }


        return view('livewire.user-management');
    }

    private function resetInput()
    {
        $this->name = null;
        $this->phone = null;
    }

    public function store()
    {

        $this->validate([
            'name' => 'required|min:5',
            'role'=>'required',
            'email'=>'required',
            'password'=>'required',

        ]);

       $user= User::create([
            'name' => $this->name,
            'role'=>$this->role,
            'email'=>$this->email,
            'password'=>$this->password,

        ]);
       dd(request('committees'));
        $user->committees()->createMany();
        $this->resetInput();
    }

    public function edit($id)
    {
        $record = User::findOrFail($id);

        $this->selected_id = $id;
        $this->name = $record->name;
        $this->phone = $record->phone;
        $this->email=$record->email;
        $this->password=$record->password;
        $this->role=$record->role;
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
            'selected_id' => 'required|numeric',
            'name' => 'required|min:5',
            'phone' => 'required'
        ]);

        if ($this->selected_id) {
            $record = User::find($this->selected_id);
            $record->update([
                'name' => $this->name,
                'phone' => $this->phone,
                'role'=>$this->role,
                'email'=>$this->email,
                'password'=>$this->password,
            ]);

            $this->resetInput();
            $this->updateMode = false;
        }

    }

    public function destroy($id)
    {
        if ($id) {
            $record = User::where('id', $id);
            $record->delete();
        }
    }
}
